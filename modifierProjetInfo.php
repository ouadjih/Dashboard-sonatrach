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
<?php
  include_once("default.php");
  if(isset($_POST['id']) || isset($_GET['idjs']) || isset($_POST['idM'])){
    try{
      $bdd=new PDO('mysql:host=localhost;dbname=sonatrach','root','');
    }
    catch(Exception $e){
      die('Erreur : '.$e->getMessage());
    }
    $req=$bdd->prepare('SELECT*FROM projet WHERE idp = :idp');
    if(isset($_POST['id'])){
      echo '<br/>'.$_POST['id'].'<br/>';
      $req->execute(array('idp'=>$_POST['id']))or die(print_r($bdd->errorInfo()));
    }
    if(isset($_POST['idM'])){
      echo '<br/>'.$_POST['idM'].'<br/>';
      print_r($_POST['idM']);
      $req->execute(array('idp'=>$_POST['idM']))or die(print_r($bdd->errorInfo()));
    }
    if(isset($_GET['idjs'])){
      echo '<br/>'.$_GET['idjs'].'<br/>';
      print_r($_GET['idjs']);
      $req->execute(array('idp'=>$_GET['idjs']))or die(print_r($bdd->errorInfo()));
    }
    $result=$req->fetch();
    if(!isset($_POST['NomP']) || !isset($_POST['DescriptionP'])){
?>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Modification de projet : <?php echo $result['nomp']; ?></h1>
        </div>
<form action="modifierProjetInfo.php" method="post">
<!--//////////////////////////////////-->
<!--HIDDEN INPUT-->
<?php if(isset($_POST['id'])){ ?>
<input type="hidden" name="idM" value="<?php echo $_POST['id']; ?>"/>

<?php } if(isset($_GET['idjs'])){ ?>
  <input type="hidden" name="idM" value="<?php echo $_GET['idjs']; ?>"/>
<?php } ?>
<!--//////////////////////////////////-->
<?php
  if(isset($_GET['mess'])){
    echo '<h6 style="color:red;">'.strip_tags($_GET['mess']).'</h6>';
  }
?>
          <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Nom de Projet</span>
          </div>
          <input type="text" class="form-control" placeholder="Nom Projet" name="NomP" aria-describedby="basic-addon1"
           value="<?php echo $result['nomp']; ?>"required/>

          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Description de Projet</span>
          </div>
          <input type="text" class="form-control" placeholder="Description de Projet" name="DescriptionP" aria-describedby="basic-addon1"
            value="<?php echo $result['description']; ?>">
         </div>
  <br/>
 <button type="submit" class="btn btn-secondary btn-lg">Suivant</button>
</form>
<?php
}else{
  $req->closeCursor();
  $req2=$bdd->query('SELECT*FROM projet');
  $ifnameExists=false;
  while($donnees=$req2->fetch()){
    if(($_POST['NomP'] == $donnees['nomp']) && ($_POST['NomP'] != $result['nomp'])){
      $ifnameExists=true;
    }
  }
  $req2->closeCursor();
  $phpvar=$_POST['idM'];
  if($ifnameExists){ ?>
        <script>
          var variable="<?php echo $phpvar;?>";
          variable=parseInt(variable);
          location.replace("modifierProjetInfo.php?mess=nom déjà pris&idjs="+variable+"");
        </script>
<?php  }
  else{
    $req3=$bdd->prepare('UPDATE projet SET nomp=:nomp,description=:description WHERE idp=:idp');
    $req3->execute(array('nomp'=>$_POST['NomP'],'description'=>$_POST['DescriptionP'],
      'idp'=>$_POST['idM']))or die(print_r($req->errorInfo()));
      $req3->closeCursor();?>
      <script>
        var variable="<?php echo $phpvar;?>";
        variable=parseInt(variable);
        location.replace("modifierProjet.php?idp="+variable+"");
      </script>
<?php }
}
}else{
  echo '<br/> Informations didn\'t get received correctly in ListeProjet.php';
}
?>
   </main>
</body>
</html>
