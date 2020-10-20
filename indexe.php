<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <script type="text/javascript"src ="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src = "js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<body>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
 
  <?php
     include_once("default.php");
     include_once("Login/functions/function.php");
  if(isset($_POST['search'])){
       $bdd=bdd();

        if(getRole($_SESSION['user'],$bdd) == "chef de Projet"){
          $reponse=$bdd->prepare('SELECT*FROM projet WHERE nomp=:nomp AND responsable=:responsable ORDER BY idp DESC LIMIT 0,10');
          $reponse->execute(array('nomp'=>$_POST['search'],'responsable'=>$_SESSION['user'])) or die(print_r($bdd->errorInfo()));
        }
        else {
          $reponse=$bdd->prepare('SELECT*FROM projet WHERE nomp=:nomp ORDER BY idp DESC LIMIT 0,10');
          $reponse->execute(array('nomp'=>$_POST['search'])) or die(print_r($bdd->errorInfo()));
        }
      ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Résultats de recherche pour : <strong><?php echo $_POST['search']; ?></strong></h1>
</div>
<?php if($donnees = $reponse->fetch()){ ?>
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
  <?php
}
    else{
      echo '<h4>aucun résultat trouvé</h4>';
    }
    $reponse->closeCursor();
}
  ?>
  </thead>
</table>
<?php get_note_card($_SESSION['user'],bdd());?>
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
            <input type="hidden" name="idp" value="<?php echo $donnees['idp']; ?>">
            <h4>voulez-vous supprimer ce projet ?</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">annuler</button>
            <button type="submit" class="btn btn-primary">supprimer</button>
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
    })
  })
  </script>
</main>
</body>

<script>
  $(document).ready(function(){
    $('.deletebtn').on('click',function(){
      $('#deletemodal').modal('show');
    })
  })
  </script>
</html>
