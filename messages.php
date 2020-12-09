<link rel="shortcut icon" href="images/gerb_logo.png" type="image/png">
<?php
	session_start();
	if(isset($_SESSION['user'])){
		$user=$_SESSION['user'];
	require_once 'db.php';
?>
<?php include('header.php'); ?>

	<div class="main" style="background-color: #34626c; min-height: 700px;">
		<div class="container">
			<div class="row pt-4">
				<div class="col-md-3">
					<?php include('left.php'); ?>
				</div>
  				<div class="col-md-9">
  					<h2 style="color:DodgerBlue;"><?php echo "Welcome ".$user['name']." ".$user['surname']."!"; ?></h2>
                                           <?php if(isset($_GET['error'])) {?>
                          <div class="alert alert-danger" role="alert">
                           Add  Error
                          </div>       
                          <?php } ?>
                          <?php if(isset($_GET['success'])) {?>
                          <div class="alert alert-success" role="alert">
                            Added
                          </div>     
                          <?php } ?>
                          <?php
                            $all_posts = getMessages($user['id']);
                                          
                            for ($i =0; $i<sizeof($all_posts); $i++){
                                              
                            ?>
          <div class="card">
              <div class="card-header bg-success">
                From   <a href="profile.php?id=<?=$all_posts[$i]['from_id']?>"><?= getUserId($all_posts[$i]['from_id'])['name']." ".getUserId($all_posts[$i]['from_id'])['surname'] ?></a>
              </div>
              <div class="card-header">
                  <?= $all_posts[$i]['title'] ?>
              </div>
              <div class="card-body">
                  <?=   $all_posts[$i]['message'] ?>
              </div>
          
              <div class="card-footer">
                    <?= $all_posts[$i]['msg_date'] ?>  
              </div>  
        
        </div>
            <?php 
              }
            ?>
                                        
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
