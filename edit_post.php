<?php
	session_start();
	if(isset($_SESSION['user'])){
		$user=$_SESSION['user'];
	require_once 'db.php';
	global $connection;
	if(!empty($_POST["save_record"])) {
		$pdo_statement=$connection->prepare("update post set title='" . $_POST[ 'title' ] . "', description='" . $_POST[ 'description' ]."',full_text='" .$_POST['full_text']. "' where id=" . $_GET["id"]);
		$result = $pdo_statement->execute();
		if($result) {
			header('location:showAllPosts.php');
		}
	}
	if (!empty($_POST["delete"])){
		$pdo_statement=$connection->prepare("delete from post where id=" . $_GET['id']);
		$pdo_statement->execute();
		header('location:showAllPosts.php');
	}

	$pdo_statement = $connection->prepare("SELECT * FROM post where id=" . $_GET['id']);
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();

	if (!empty($_POST["cancel"])){
		header('location:showAllPosts.php');
	}
	
?>
<?php include('header.php'); ?>

	<div class="main" style="background-image: url('https://cdn2.f-cdn.com/contestentries/1476645/32188263/5c7d1750c9de4_thumb900.jpg');">
		<div class="container">
			<div class="row mt-3">
				<div class="col-md-3">
					
					<?php include('left.php'); ?>
				</div>
				<div class="col-md-9">
					<h2 style="color:DodgerBlue;"><?php echo "Welcome ".$user['name']." ".$user['surname']."!"; ?></h2>
					<?php
						if(isset($_GET['error'])){
					?>
						<div class="alert alert-danger" role="alert">
						  Error on update!!!
						</div>
					<?php
						}
					?>
					<?php
						if(isset($_GET['success'])){
					?>
						<div class="alert alert-success" role="alert">
						  Update completed successfully!!!
						</div>
					<?php
						}
					?>

					<h3 class="">Edit post</h3>
					<form action="" method="post">
						<div class="form-group">
							<label for="">Title</label>
							<input type="text" name="title" class="form-control" value="<?= $result[0]['title'];?>" >
						</div>
						<div class="form-group">
							<label for="">Description:</label>
							<input type="text" name="description" class="form-control" placeholder="Description" value="<?= $result[0]['description']?>">
						</div>
						<div class="form-group">
							<label for="">Full Text</label>
							<textarea type="text" name="full_text" class="form-control" placeholder="Full Text""><?= $result[0]['full_text']?></textarea>
						</div>

						<div class="form-group">

							<input name="save_record" type="submit" class="btn btn-success" value="UPDATE POST">
							<input name="delete" type="submit" class="btn btn-danger" value="DELETE POST">
							<input name="cancel" type="submit" class="btn btn-secondary" value="CANCEL">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>
<?php }
else{
	header('Location:index.php');
	}
 ?>
