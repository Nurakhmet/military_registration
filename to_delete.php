<?php
	include "db.php";
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		session_start();
		if(isset($_SESSION['user']['id'])){
			deletePost($_POST['id_p'], $_SESSION['user'][0]);
			
			$uri = "?success_delete";
			header("Location:index.php?success_delete");
		}
	}



?>