<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <style>
      .button{
        float: right;
      }
    </style>
</head>
<body>
<?php
session_start();
include_once("default.php");
?>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Ajouter une Note : </h1>
        </div>
    <form action="addNote.php" method="post">
      <?php
        include_once("Login/functions/function.php");
        if(isset($_POST['submit']))
  {
    $titreN = htmlentities(trim($_POST['titreN']));
    $contenuN = htmlentities(trim($_POST['contenuN']));
    $dateN = htmlentities(trim($_POST['dateN']));
    $user = htmlentities(trim($_SESSION['user']));
   
    
    //htmlentities permet de viré tous les tags et trim permet de viré tous les espaces
    if($titreN && $contenuN && $dateN && $user)
      {
       
          $bdd=bdd();
          add_note($_POST,$bdd,$user);
      }
    else
    {
      echo" Veuilliez saisir tous les champs ! ";
    }
  }

      ?>
          <div class="input-group mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Titre de Note</span>
          </div>
          <input type="text" class="form-control" placeholder="titre" name="titreN" aria-describedby="basic-addon1">
         </div>

          <div class="input-group mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text">Contenu de Note</span>
          </div>
          <textarea class="form-control" aria-label="With textarea"name="contenuN"></textarea>
        </div>
        <div class="input-group mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text">Date de Note</span>
          </div>
          <input type="date" name="dateN">
        </div>
        
      <button type="submit" class="btn btn-secondary btn-lb" class="fixed-right" name="submit">Sauvgarder</button>
    
</form>

   </main>
</body>
</html>
