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
					
					 <?php if(isset($_GET['error'])) {?>
                        <div class="alert alert-danger" role="alert">
                          Post Creation Error
                        </div>       
                        <?php } ?>
                        <?php if(isset($_GET['success'])) {?>
                        <div class="alert alert-success" role="alert">
                          Post was successfully created
                        </div>     
                        <?php } ?>

					<h3 class="">To Create Post</h3>
					<form action="to_posts.php" method="post">
						<div class="form-group">
							<label for="">Title</label>
							<input type="text" name="title" class="form-control" placeholder="Title">
						</div>
						<div class="form-group">
							<label for="">Description</label>
							<input type="text" name="description" class="form-control" placeholder="Description">
						</div>
						<div class="form-group">
							<label for="">Full Text</label>
							<textarea type="text" name="full_text" class="form-control" placeholder="Full Text"></textarea>
						</div>
						
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Post">
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
	header('Location:auth.php');
	}
 ?>