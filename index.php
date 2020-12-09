<link rel="shortcut icon" href="images/gerb_logo.png" type="image/png">
<?php
	session_start();
	if(isset($_SESSION['user'])){
		$user=$_SESSION['user'];
	require_once 'db.php';
?>
<?php include('header.php'); ?>

	<div class="main" style="background-color: #34626c; color: white; min-height: 700px;">
		<div class="container">
			<div class="row pt-4">
				<div class="col-md-3">
					
					<?php include('left.php'); ?>
				</div>
				<div class="col-md-9">
					<h2 style="color:DodgerBlue;"><?php echo "Welcome ".$user['name']." ".$user['surname']."!"; ?></h2>
					<?php
						if(isset($_GET['error_update'])){
					?>
						<div class="alert alert-danger" role="alert">
						  Error on update!!!
						</div>
					<?php
						}
					?>

					<?php
						if(isset($_GET['error_delete'])){
					?>
						<div class="alert alert-danger" role="alert">
						  Error on  delete!!!
						</div>
					<?php
						}
					?>

					<?php
						if(isset($_GET['success_update'])){
					?>
						<div class="alert alert-success" role="alert">
						  Successfully updated!!!
						</div>
					<?php
						}
					?>

					<?php
						if(isset($_GET['success_delete'])){
					?>
						<div class="alert alert-success" role="alert">
						  Successfully deleted!!!
						</div>
					<?php
						}
					?>


					<?php
					$posts = getPost($user['id']);

					?>
					
					<h3 class="">Edit posts</h3>
					<?php foreach ($posts as $post) {
						
					?>
						<form action="to_update.php" method="post">
							<div class="form-group">
								<label style="font-weight: bold;">Post:</label><br>
								<label for="">Title:</label>
								<input type="text" name="title" class="form-control" value="<?= $post['title']?>">
								<label for="">Description:</label>
								<input type="text" name="description" class="form-control" value="<?= $post['description']?>">
								<label for="">Content:</label>
								<input type="text" name="full_text" class="form-control" value="<?= $post['full_text']?>">
								<label for="">Post Date:</label>
								<input type="hidden" name="id_p" value="<?php echo $post['id'] ?>">
							</div>

						

							<span><?php echo $post['post_date'] ?></span><br>
							<input type="submit" class="btn btn-success" value="Change Text">
												
						</form>
						<form action="to_delete.php" method="post">
							<input type="hidden" name="id_p" value="<?php echo $post['id'] ?>">
							<input type="submit" class="btn btn-danger" value="Delete" style="margin-top: 5px; margin-bottom: 20px;">
						</form>
					<?php
				 }?>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>
<?php }
else{
	header('Location:auth.php');
	}
 ?>
