<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		      <h1 class="h2">Modifier la Note : </h1>
		    </div>
	<?php
	include_once("default.php");
  include_once("Login/functions/function.php"); 


	  if(isset($_GET["id"]))
	  {
	    $id=htmlspecialchars(htmlentities($_GET["id"]));
	    $datas = getNoteById($id, bdd());
	  }
	?>
	 <div class="form-group col  ">
	 	 <div class="col-xs-2">
		    <label>Titre note:</label>
		    <input type="text" id="titre"  value="<?php echo $datas['titreN']; ?>" class="form-control">
		    <small  class="form-text text-muted">Modifier le titre de note ! </small>
	    </div>
	 	 <div class="col-xs-2">
		    <label>Contenu de note:</label>
		    <input type="text" id="contenu"  value="<?php echo $datas['ContenuN']; ?>" class="form-control">
		    <small  class="form-text text-muted">Modifier le contenu de note ! </small>
	 	</div>
	  	<div class="col-xs-2">
		   	<label>Date note:</label>
		    <input type="date" id="date"  value="<?php echo $datas['titreN']; ?>" class="form-control">
		    <small  class="form-text text-muted" >Modifier la date de note ! </small>
	 	</div>
	   <button type="submit" name ="submit" onclick="modifier()" class="btn btn-primary">Modifier</button>
	</div>

</body>

<script>
  function modifier()//une fonction modifier pour modifier un article 
  {
    let id = <?php echo $_GET["id"];?>; //var de fct recoit la val id envoyer par la meth get dans la fct getnote
    let titre = $("#titre").val();//#var sont les vars recuperer par id des  les inputs 
    let contenu = $("#contenu").val();
    let date = $("#date").val();

    $.ajax( //fct ajax 
    {
      type:'post',//meth post 
      data:
      {
        id:id,
        titre:titre,
        contenu:contenu
        date:date,
      },
      url: 'modif.php',//rediriger vers la page modif.php pour l'appel de fct ModifierArticle
      success:function(result)
      {
          Swal.fire( //framework pour afficher une alerte illustrer 
            'Note Modifié',//argument text1  
            'la modification a été effectuée avec succès',//argument big text
            'success'//type de resultat
          ).then(function(){//fonction pour rediriger la page vers la liste des  articles apres l'ajout avec succés
            
            location.href="ConsulterNote.php";
          
          })
          
      }
    });
  }

</script>

</html>

