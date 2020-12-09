<link rel="shortcut icon" href="images/gerb_logo.png" type="image/png">
<?php
	session_start();
	if(isset($_SESSION['user'])){
		$user=$_SESSION['user'];
	require_once 'db.php';
  $users = getAllUser();
?>
<?php include('header.php'); ?>

	<div class="main" style="background-color: #34626c; min-height: 700px;">
		<div class="container">
			<div class="row pt-4">
				<div class="col-md-3">
					<?php include('left.php'); ?>
				</div>
  				<div class="col-md-9">
          
              <table class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Surname</th>
                  <th>Email</th>
                  <th>Operation</th>
                </tr>
              </thead>
              <tbody>
                <?php 
              foreach ($users as $i) {
              ?>
                <tr>
                  <th><?php echo $i['name']; ?></th>
                  <td><?php echo $i['surname']; ?></td>
                  <td><?php echo $i['email']; ?></td>
                  <td> <a href="friend_page.php?id=<?php echo $i['id']; ?>" class="btn btn-sm btn-info">INFO</a> </td>
                </tr>
                 <?php 
                } ?>
              </tbody>
            </table>
            <form action="to_table.php" method="post">
            
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="REPORT">
            </div>
          </form>                      
				</div>
			</div>
		</div>
	</div>	
</body>



</html>
<?php 
}

else{
	header('Location:auth.php');
	}
 ?>
