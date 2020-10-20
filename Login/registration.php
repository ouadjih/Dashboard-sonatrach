
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="POST" action="registration.php" >
					<?php
					include_once('functions/function.php');
	if(isset($_POST['submit']))
	{
		$_POST['pass'] = password_hash ( $_POST['pass'] , PASSWORD_DEFAULT ) ;
		$_POST['passConf'] = password_hash ( $_POST['passConf'] , PASSWORD_DEFAULT ) ;
		$nom = htmlentities(trim($_POST['nom']));
		$prenom = htmlentities(trim($_POST['prenom']));
		$numtel = htmlentities(trim($_POST['numTel']));
		$email = htmlentities(trim($_POST['email']));
		$role = htmlentities(trim($_POST['Role']));
		$user = htmlentities(trim($_POST['user']));
		$pass = htmlentities(trim($_POST['pass']));
		$confpass = htmlentities(trim($_POST['passConf']));
		//htmlentities permet de viré tous les tags et trim permet de viré tous les espaces
		if($nom && $prenom && $numtel && $email && $role && $user && $pass && $confpass)
			{   
				$longueur = strlen($pass);				
				if ($longueur < 8) 
					{
						echo "Mot de passe trop court !";
						return false;
					}
					else
					{
						if(password_verify( $pass , PASSWORD_DEFAULT) == password_verify( $confpass , PASSWORD_DEFAULT ))
							{	
								$bdd=bdd();
								add_user($user,$_POST,$bdd);
							}else
							{
								echo"le mot de passe n'est pas identique";
							}	
					}
		}else
						{
							echo" Veuilliez saisir tous les champs ! ";
						}
	}
?>
					<span class="login100-form-title p-b-32">
						Cree Un Compte
					</span>

					<span class="txt1 p-b-11">
						Nom
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "champ obligatoire">
						<input class="input100" type="text" name="nom" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Prenom
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "champ obligatoire">
						<input class="input100" type="text" name="prenom" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Numero de Tel
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "champ obligatoire">
						<input class="input100" type="text" name="numTel" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "champ obligatoire">
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Poste 
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "champ obligatoire">
						<p>
							<input  type="radio" name="Role" value ="chef de Projet" > Chef de Projet
							<input  type="radio" name="Role" value = "manager"  > Manager
						</p>
						
					</div>

					<span class="txt1 p-b-11">
						Utilisateur
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "champ obligatoire">
						<input class="input100" type="text" name="user" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Mot de passe
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Confirmation de Mot de passe
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password Confirmation is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="passConf" >
						<span class="focus-input100"></span>
					</div>
					
					

					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" name="submit" value="s'inscrire"> 
						<label  for="ckb1">
								 <a href ="login.php">  vous avez un compte ?</a>
							</label>
						</div>
						

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>