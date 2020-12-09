<?php  
	$uri="?error";

	if($_SERVER["REQUEST_METHOD"]=="POST"){

		session_start();

		if(isset($_SESSION['user'])){

			if(isset($_POST["title"])&&isset($_POST["description"])&&isset($_POST["full_text"])){

				require_once "db.php";

				addPost($_SESSION['user']['id'],$_POST['title'],$_POST['description'],$_POST['full_text']);

				$uri="?success";

			}

		}

	}


	header("Location:posts.php$uri");
?>