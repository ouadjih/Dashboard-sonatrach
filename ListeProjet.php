
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<?php
include_once("default.php");
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Mes Projets :</h1>
      </div>
      <?php
        try{
          $bdd=new PDO('mysql:host=localhost;dbname=sonatrach','root','');
        }
        catch(Exception $e){
          die('Erreur : '.$e->getMessage());
        }
        if(getRole($_SESSION['user'],$bdd) == "chef de Projet"){
          $reponse=$bdd->prepare('SELECT*FROM projet WHERE responsable = :responsable ORDER BY idp DESC LIMIT 0,10');
          $reponse->execute(array('responsable'=>$_SESSION['user'])) or die(print_r($req->errorInfo()));
        }
        else {
          $reponse=$bdd->query('SELECT*FROM projet ORDER BY idp DESC LIMIT 0,10') or die(print_r($bdd->errorInfo()));
        }

      ?>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">ID <i class="fa-pencil" title="Edit"></i></th>
      <th scope="col">Nom de Projet</th>
      <th scope="col">DECRIPTION</th>
      <th scope="col">Responsable</th>
      <th scope="col">Finanier</th>
      <th scope="col">Physique</th>
      <?php if(getRole($_SESSION['user'],$bdd) == "chef de Projet"){?>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
      <?php }?>
    </tr>
  <?php
  while($donnees = $reponse->fetch()){?>
    <tr>
            <td><?php echo '<strong>'.$donnees['idp'].'</strong>'?></td>
            <td><?php echo '<strong>'.$donnees['nomp'].'</strong>'?></td>
            <td><?php echo $donnees['description']?></td>
            <td><?php 
                $reponse2=$bdd->prepare('SELECT nom,prenom from utilisateur WHERE user=:user');
                $reponse2->execute(array('user'=>$donnees['responsable'])) or die(print_r($req->errorInfo()));
                $donnees2 = $reponse2->fetch();
                echo $donnees2['nom'].' '.$donnees2['prenom'];
                 ?>

           </td>
            <td><?php echo '<a href="resultatProjetF.php?idp='. $donnees['idp'] .'"><button class="btn btn-success btn-sm">Financier
            </button></a>';?></td>
            <td><?php echo '<a href="resultatProjetPh.php?idp='. $donnees['idp'] .'"><button class="btn btn-success btn-sm">Physique
            </button></a>';?></td>
            <?php if(getRole($_SESSION['user'],$bdd) == "chef de Projet"){?>
            <td>
              <form action="modifierProjetInfo.php" method="post">
                <input type="hidden" name="id" value="<?php echo $donnees['idp']; ?>"/>
                <input type="submit" value="Modifier"/>
              </form>
            </td>
            <td>
              <button class="btn btn-danger btn-sm deletebtn" >Supprimer</button>
            </td>
            <?php }?>
          </tr>
  <?php ;} ?>
  </thead>
</table>
<!-- Delete pop up form -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="deleteProjet.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="idp" id="idp" value="<?php echo $donnees['idp']; ?>">
            <h4>voulez-vous supprimer ce projet ?</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">annuler</button>
            <button type="submit" name="deletedata" class="btn btn-primary">supprimer</button>
          </div>
        </form>
    </div>
  </div>
</div>
<!-- ///////////////////// -->
  <script>
  $(document).ready(function(){
    $('.deletebtn').on('click',function(){
      $('#deletemodal').modal('show');
      $tr=$(this).closest('tr');
      var data=$tr.children("td").map(function(){
        return $(this).text();
      }).get();
      console.log(data);
      $('#idp').val(data[0]);
    })
  })
  </script>
<?php $reponse->closeCursor(); ?>
</main>
</body>
</html>

        
        
     