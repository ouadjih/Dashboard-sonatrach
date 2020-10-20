<?php

	function bdd()
		{
			try
			{
				$pdo_options[PDO :: ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
				$bdd = new PDO('mysql:host=localhost;dbname=sonatrach','root','');
			

			}
			catch(PDOException $e)
			{
				die("ERR : ".$e->getMessage());
			}
			return $bdd;
			
		}
	
		function add_user($user,$info,$db)
		{
			//verification l'existance d'utilisateur
			$sql ="SELECT * FROM `utilisateur` WHERE user='$user'";
			$r= $db->query($sql);
			if($row = $r->fetch())
			{
				echo"l'Utilisateur exite deja";
			}
			else 
			{ //adduser
				//hashing the password bcrypt est une fonction de hachage créée par Niels Provos et David Mazières. Elle est basée ... L'algorithme dépend fortement de l'établissement des clefs de la méthode « Eksblowfish »

				$query ="INSERT INTO `utilisateur`(`id_user`, `nom`, `prenom`, `numTel`, `email`, `role`, `user`, `pass`, `confpass`) VALUES ('','".$info['nom']."','".$info['prenom']."','".$info['numTel']."','".$info['email']."','".$info['Role']."','".$info['user']."','".$info['pass']."','".$info['passConf']."')";
					$res= $db->exec($query) or die('Erreur SQL !<br>'.$query.'<br>'.$db->errorInfo());
					die("inscription terminé<a href='login.php'>Connectez</a>-vous");
					return $res;
			} 
		}
		function search_user($info,$db)
		{
			$sql="SELECT * FROM utilisateur 
      					WHERE id_user='$info' or nom='$info' or prenom='$info' or email='$info' or numTel='$info' or role='$info' or user='$info'";
      					$sql="SELECT * FROM utilisateur";
	      		$req = $db->prepare($sql);
				$req->execute();
		if($donnees = $req->fetch()){
			echo"<table class='table table-hover'>
				  <thead>
				    <tr>
				      <th scope='col'>ID <i class='fa-pencil' title='Edit'></i></th>
				      <th scope='col'>Nom </th>
				      <th scope='col'>Prenom</th>
				      <th scope='col'>Email</th>
				      <th scope='col'>Num de Tel</th>
				      <th scope='col'>Role</th>
				      <th scope='col'>User</th>
				      <th scope='col'>Modifier</th>
				      <th scope='col'>supprimer</th>
				    </tr>
				  </thead>
				  <tbody>";

			while($donnes = $req->fetch())
			{
				$id=$donnes['id_user'];
				echo"
			<tr>
		          <td>".$donnes['id_user']."</td>
		          <td>".$donnes['nom']."</td>
		          <td>".$donnes['prenom']."</td>
		          <td>".$donnes['numTel']."</td>
		          <td>".$donnes['email']."</td>
		          <td>".$donnes['role']."</td>
		          <td>".$donnes['user']."</td>
		          <td>
		          		<a href='ModifierNote.php?id=$id' class='btn btn-warning'>Modifier</a>
		          </td>
		         	<td> <a href='delete.php?id=$id' onclick='return confirm(\"Etes vous sure  de Supprimer?\");'
      			class='btn btn-danger'>Supprimer</a>    
      			   </td> 
        			
        	</tr>";}
        echo" </tbody>
			</table>";}
        	else{
      echo '<h4>aucun résultat trouvé</h4>';
       $reponse->closeCursor();
    }
   
		}
	
		function getRole($user,$db)
		{
			$sql="SELECT role FROM utilisateur 
      					WHERE user='$user'";
      		$req = $db->prepare($sql);
			$req->execute();
			$array = $req->fetchALL();
		    return $array[0]['role'];
		}
		function verif_user($db,$user,$pass)
		{
						
      		$sql="SELECT pass FROM utilisateur 
      					WHERE user='$user'";
      		$req = $db->prepare($sql);
			$req->execute();
			$array = $req->fetchALL();
			$passR = $array[0]['pass'];
			if(password_verify ( $pass , $passR ))
			{
      		$_SESSION['user'] = $user;
      		$_SESSION['pass'] = $pass; 
      			
      						header('location:http://localhost/db/indexe.php');
      		exit();
      		
      	}
      	else
      	{
            session_destroy();
      		echo" Utilisateur ou mot de passe Incorrect ";
      	}
				

		}
		function get_Users($user,$db) 
    	{
    		if(getRole($user,$db)=="admin")
    		{
    			$sql="SELECT * FROM utilisateur";
	      		$req = $db->prepare($sql);
				$req->execute();
				
				   

			while($donnes = $req->fetch())
			{
				$id=$donnes['id_user'];
				echo"
			<tr>
		          <td>".$donnes['id_user']."</td>
		          <td>".$donnes['nom']."</td>
		          <td>".$donnes['prenom']."</td>
		          <td>".$donnes['numTel']."</td>
		          <td>".$donnes['email']."</td>
		          <td>".$donnes['role']."</td>
		          <td>".$donnes['user']."</td>
		          <td>
		          		<a href='ModifierNote.php?id=$id' class='btn btn-warning'>Modifier</a>
		          </td>
		         	<td> <a href='delete.php?id=$id' onclick='return confirm(\"Etes vous sure  de Supprimer?\");'
      			class='btn btn-danger'>Supprimer</a>    
      			   </td> 
        			
        	</tr>";
        	}

    		}
    		    	}
 
		
		
		function add_note($info,$db,$user)
		{
			$query ="INSERT INTO `note`(`id_note`, `titreN`, `ContenuN`, `user`, `dateN`) VALUES ('','".$info['titreN']."','".$info['contenuN']."','".$user."','".$info['dateN']."')";
					$res= $db->exec($query) or die('Erreur SQL !<br>'.$query.'<br>'.$db->errorInfo());
					die("la Note a été bien ajouter <a href='ConsulterNote.php'> voire </a> mes notes");
					return $res;
		}
		function get_note($user,$db)
		{

			$sql="SELECT * FROM note 
      					WHERE user='$user'";
      		$req = $db->prepare($sql);
			$req->execute();
			while($donnes = $req->fetch())
			{
				echo"
			<tr>
		          <td>".$donnes['titreN']."</td>
		          <td>".$donnes['dateN']."</td>
		          <td>".$donnes['ContenuN']."</td>";
		          $id=$donnes['id_note'];
		          echo"
		          <td>
		          		<a href='ModifierNote.php?id=$id' class='btn btn-warning'>Modifier</a>
		          </td>
		         	<td> <a href='delete.php?id=$id' onclick='return confirm(\"Etes vous sure  de Supprimer?\");'
      			class='btn btn-danger'>Supprimer</a>    
      			   </td> 
        			
        	</tr>";
        	}
        	
		}
		function get_note_card($user,$db)
		{
			$sql="SELECT * FROM note 
      					WHERE user='$user'";
      		$req = $db->prepare($sql);
			$req->execute();
			echo"
				<div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'>
      <h1 class='h2'>Voici Quelque Notes : </h1>
    </div>
			<style>
					.card{
						display:inline-flex;
					}
			</style>";
			while($donnes = $req->fetch())  {echo"

		    <div class= 'card' style='width: 18rem; margin-right: 1rem'>
		    <div class='card-body'>
		    <h5 class='card-title'>".$donnes['titreN']."</h5>
		    <h6 class='card-subtitle mb-2 text-muted'>".$donnes['dateN']."</h6>
		    <p class='card-text'>".$donnes['ContenuN']."</p>
		    </div>
		    </div>";
			}
     
    	}

    	
		
		function delete_note($id,$db)
		{
			$query= $db->prepare("DELETE FROM `note` WHERE id_note= '$id'");
				$query->execute();
		}
		
		function getNoteById($id, $db)
		{
			$sql = "SELECT * from note WHERE id_note='$id'";

			$r= $db->query($sql);

			if($row = $r->fetch())
			{
				return $row;
			}
			else
			{
				echo "Not found";
			}
		}
		function Modifier_note($db)
		{
			if(isset($_REQUEST['id']) && isset($_REQUEST['titre']) && isset($_REQUEST['contenu']) && isset($_REQUEST['date']))
			{
				$id_note	 = 	$_REQUEST['id'];//sauvgarder la valeur ID d'article dans une variable pui on l'envoyer avec le lien
				$titreN	 	 = 	$_REQUEST['titre'];
				$contenuN	 = 	$_REQUEST['contenu']; 	
	      		$dateN  		 =  $_REQUEST['date'];

				$query = "UPDATE `note` SET `dateN`='$dateN',`titreN`='$titreN',`ContenuN`='$contenuN' WHERE `id_note`='$id_note' ";
				$db->exec($query);
				
			}
		}
		function get_responsable($idp,$db)
		{	
			

			if($row = $r->fetch())
			{
				return $row;
			}
			else
			{
				echo "Not found";
			}
		}

		
?>