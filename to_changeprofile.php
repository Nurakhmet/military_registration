<?php
	
	$uri = "index.php";

	if($_SERVER["REQUEST_METHOD"]=="POST"){

		$uri = "edit_profile.php?error";

		session_start();

		if(isset($_SESSION['user'])){

			if(isset($_POST["name"])&&isset($_POST["surname"])){

				require_once "db.php";

				updateProfile($_POST['name'],$_POST['surname'],$_SESSION['user']['id'],$_POST["university"],$_POST["faculty"],$_POST['photoId_url']);
				$_SESSION['user']['name'] = $_POST['name'];
				$_SESSION['user']['surname'] = $_POST['surname'];
                                $_SESSION['user']['university_id'] = $_POST["university"];
                                $_SESSION['user']['faculty_id'] = $_POST["faculty"];
                                $_SESSION['user']['photoId_url'] = $_POST["photoId_url"];
                                        
				$uri = "edit_profile.php?success";

			}

		}

	}


	header("Location:$uri");

?>