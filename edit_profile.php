<link rel="shortcut icon" href="images/gerb_logo.png" type="image/png">
<?php
	session_start();
	if(isset($_SESSION['user'])){
		$user=$_SESSION['user'];
	
	require_once 'db.php';
	$photoId = getUser($user['email']);
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
					<h3 class="">Edit profile</h3>
					<form action="to_changeprofile.php" method="post">
						<div class="form-group">
							<label for="">Name:</label>
							<input type="text" name="name" class="form-control" value="<?php echo $_SESSION['user']['name'];?>">
						</div>
						<div class="form-group">
							<label for="">Surname:</label>
							<input type="text" name="surname" class="form-control" value="<?php echo $_SESSION['user']['surname'];?>">
						</div>
						<div class="form-group">
                            <label for="lastname">University</label>
                            
                            	<select  class="form-control" name="university" >
                                            <?php 
                                            require_once 'db.php';
                                            $universities = getUniversities();
                                           for ($i =0; $i<sizeof($universities); $i++){
                                            
                                            ?>
                                            
                                            <option <?php if($_SESSION['user']['university_id']==$universities[$i]['id']) echo "selected "; ?> value="<?=$universities[$i]['id'] ?>"> <?=$universities[$i]['name'] ?></option>
                                            
                                            <?php 
                                           }
                                            
                                            ?>
                                </select>
                          
                        </div>
                        <div class="form-group">
                                    <label for="lastname">Faculty</label>
                                        <select  class="form-control" name="faculty"   >
                                            <?php 
                                            
                                            $universities = getFaculties();
                                           
                                           for ($i =0; $i<sizeof($universities); $i++){
                                            
                                            ?>
                                            
                                            <option <?php if($_SESSION['user']['faculty_id']==$universities[$i]['id']) echo "selected "; ?> value="<?=$universities[$i]['id'] ?>"> <?=$universities[$i]['name'] ?></option>
                                            
                                            <?php 
                                           }
                                            
                                            ?>
                                        </select>
                        </div>
                        <div class="form-group">
							<label for="">Id photo url:</label>
							<input type="file" name="photoId_url" class="form-control" value="<?php echo $_SESSION['user']['photoId_url'];?>">
						</div>
						<div class="form-group">
							<img src="images/<?php echo($photoId['photoId_url'])?>" style="height: 100px; width:100px;">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="UPDATE PROFILE">
						</div>
					</form>
					<h3 class="">Edit password</h3>
					<form action="to_changepassword.php" method="post">
						<div class="form-group">
							<label for="">Old password:</label>
							<input type="password" name="old_password" class="form-control" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="">New password:</label>
							<input type="password" name="new_password" class="form-control" placeholder="New password">
						</div>
						<div class="form-group">
							<label for="">Confirm new password:</label>
							<input type="password" name="confirm_new_password" class="form-control" placeholder="Confirm new password">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="UPDATE PASSWORD">
						</div>
					</form>
					<form action="to_write.php" method="post">
						
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="SPRAVKA">
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
