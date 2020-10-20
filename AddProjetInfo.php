<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
 
<?php
  include_once("default.php");
  include_once("Login/functions/function.php");
  try{
    $bdd = new PDO('mysql:host=localhost;dbname=sonatrach', 'root', '')or die(print_r($bdd->errorInfo()));
  }
  catch (Exception $e){
    die('Erreur : '.$e->getMessage());
  }
  if(!isset($_POST['NomP']) || !isset($_POST['DescriptionP'])){

?>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Ajouter un nouveau projet : </h1>
        </div>
    <form action="AddProjetInfo.php" method="post">
      <?php
        if(isset($_GET['mess'])){

          echo '<h6 style="color:red;">'.strip_tags($_GET['mess']).'</h6>';
        }
      ?>
          <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Nom de Projet</span>
          </div>
          <input type="text" class="form-control" placeholder="Nom Projet" name="NomP" aria-describedby="basic-addon1" required/>

          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Description de Projet</span>
          </div>
          <input type="text" class="form-control" placeholder="Description de Projet" name="DescriptionP" aria-describedby="basic-addon1">
         </div>
         <button type="submit" class="btn btn-secondary btn-lg">Suivant</button>
      </form>
<?php }
    else{

      $req=$bdd->prepare('SELECT nomp FROM projet WHERE nomp=:nomp');
      $req->execute(array('nomp'=>$_POST['NomP'])) or die(print_r($req->errorInfo()));
      if($req->fetch()){
        $req->closeCursor();
        echo"req executed"; ?>
        <script> location.replace("AddProjetInfo.php?mess=nom déjà pris"); </script>
<?php
      }
 else{  
          
          $req->closeCursor();
          $query ="INSERT INTO `projet`(`nomp`, `description`, `responsable`) VALUES ('".$_POST['NomP']."','".$_POST['DescriptionP']."','".$_SESSION['user']."')";
          $res= $bdd->exec($query) or die('Erreur SQL !<br>'.$query.'<br>'.$bdd->errorInfo());
         
          $req3=$bdd->prepare('SELECT idp FROM projet WHERE nomp=:nomp');
          $req3->execute(array('nomp'=>$_POST['NomP'])) or die(print_r($req->errorInfo()));
          $result=$req3->fetch();
          $req3->closeCursor();
          $phpvar=$result['idp'];
          ?>
          <script>
              var variable="<?php echo $phpvar;?>";
              variable=parseInt(variable);
             location.replace("AddProjet.php?idp="+variable+"");
          </script>
<?php
      }
    }
?>
   </main>
</body>
</html>
