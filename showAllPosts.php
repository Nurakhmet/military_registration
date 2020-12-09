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
					
					<?php 
					$all_posts = getUsersPosts();

					for ($i =0; $i<sizeof($all_posts); $i++){

						if(isset($_GET['keyword'])){
                            $key = $_GET['keyword'];
                            if (!strstr($all_posts[$i]['description'], $key ) && !strstr($all_posts[$i]['title'], $key) && !strstr($all_posts[$i]['full_text'], $key) ){
                                    continue;
                            }
                                            
                        }

					?>

					<h6><?php echo "Posts of"." "?><a href="profile.php?id=<?=$all_posts[$i]['user_id']?>"><?= getUserId($all_posts[$i]['user_id'])['name']." ".getUserId($all_posts[$i]['user_id'])['surname']  ?></a></h6>
				
					<span><?php if(isset($all_posts[$i]["title"])&&isset($all_posts[$i]["description"])&&isset($all_posts[$i]["full_text"])){ echo $all_posts[$i]['title']."<br>".$all_posts[$i]['description']."<br>".$all_posts[$i]['full_text']."<br>".$all_posts[$i]['post_date']."<br><br>";} else{echo "There is no any post";} ?></span>
		
					<?php } ?>
					
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
