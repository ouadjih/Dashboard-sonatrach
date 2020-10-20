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
      <h1 class="h2">Mes Notes : </h1>
    </div>

  <table class="table table-bordered table-dark">
      <thead>
        <tr>
          <th scope="col">Titre</th>
          <th scope="col">Date</th>
          <th scope="col">Contenu</th>
          <th scope="col">Modifier</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
            <?php
    include_once("Login/functions/function.php");
    $bdd=bdd();
    $user = $_SESSION["user"];
      get_note($user,$bdd);
    ?>
      </tbody>
  </table>
    
  
   </main>
</body>
</html>
