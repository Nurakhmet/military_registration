 <?php  
	$uri="?error";
	if($_SERVER['REQUEST_METHOD']=='POST'){
		if(isset($_POST['title'])&&isset($_POST['message'])&&isset($_POST['to_id'])&&isset($_POST['from_id']) ){
			require_once 'db.php';
			 
				writeMessage( $_POST['title'],$_POST['message'],$_POST['to_id'],$_POST['from_id']);
				$uri="?success";
			 
		}
	}
	header("Location:index.php$uri");
?>