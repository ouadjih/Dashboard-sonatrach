<?php
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	if(!empty($id )&& is_numeric($id))
	{
		include_once("Login/functions/function.php");
		delete_note($id,bdd());
		header("Location:ConsulterNote.php");
	}
}
?>