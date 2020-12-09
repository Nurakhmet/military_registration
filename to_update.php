<?php
	include "db.php";

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		session_start();

		if(isset($_SESSION['user'][0])){
			if(isset($_POST["title"])&&isset($_POST["description"])&&isset($_POST["full_text"])){

				require_once "db.php";

				updatePost($_POST['title'],$_POST['description'],$_POST['full_text'],$_SESSION['user'][0],$_POST['id_p']);
				header("Location:index.php?success_update");
				

			}

		}

	}



?>