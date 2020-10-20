<?php
include_once("Login/functions/function.php");
  if(isset($_POST['idp'])){
   $bdd=bdd();
    $req=$bdd->prepare('DELETE FROM projet WHERE idp =:idp');
    $req->execute(array('idp'=>$_POST['idp'])) or die(print_r($bdd->errorInfo()));
    header('location:listeProjet.php');   
  }
  else{
    echo '<br/> Informations didn\'t get received correctly from ListeProjet.php';
  }
?>