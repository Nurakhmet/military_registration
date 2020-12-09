<link rel="shortcut icon" href="images/gerb_logo.png" type="image/png">
<?php
	session_start();
	if(isset($_SESSION['user']) ){
            require_once 'db.php';
            if(isset($_GET['id']) ){
		$user=$_SESSION['user'];
                $profile = getUserId($_GET['id']);  
                $photoId = getUser($user['email']);    
?>
<?php include('header.php'); ?>

	<div class="main" style="background-color: #34626c; min-height: 700px;">
		<div class="container" >
			<div class="row pt-4">
				<div class="col-md-3">
					
					<div class="bg-light border-right" id="sidebar-wrapper">
	<div style="height: 130px;" class="text-center pt-2">
		<a href="index.php"><img src="images/soldat_logo.png" height="120" width="120"></a>
	</div>

	<div class="list-group list-group-flush">
            <a href="profile.php?id=<?=$_GET['id']?>" class="list-group-item list-group-item-action bg-light"><?=$profile['surname']." ".$profile['name'] ?></a>
	<a  data-toggle="modal" data-target="#msgModal" class="list-group-item list-group-item-action bg-light">Write message</a>
	
	 
	</div>
    </div>
				</div>
				    <div class="col-md-9">
					   <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $profile['name'];?>">
                        </div>
                        <div class="form-group">
                            <label for="">Surname:</label>
                            <input type="text" name="surname" class="form-control" value="<?php echo $profile['surname'];?>">
                        </div>
                        <div class="form-group">
                            <label for="lastname">University</label>
                            <input type="text" name="surname" class="form-control" value="<?php echo $profile['university_id'];?>">
                        </div>
                        <div class="form-group">
                                    <label for="lastname">Faculty</label>
                                    <input type="text" name="surname" class="form-control" value="<?php echo $profile['faculty_id'];?>">
                        </div>
                        <div class="form-group">
                            <label for="">Id photo url:</label>
                        </div>
                        <div class="form-group">
                            <img src="images/<?php echo($profile['photoId_url'])?>" style="height: 100px; width:100px;">
                        </div>

        
                                
                                            
                                            
                    </div>                
				</div>
			</div>
		</div>
	</div>	
</body>

</html>
<?php

    
    
}
else 
{header('Location:index.php');}
}
else{
	header('Location:login.php');
	}
 ?>
