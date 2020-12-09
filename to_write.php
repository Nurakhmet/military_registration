<?php
$uri = "index.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $uri = "edit_profile.php?error";
	session_start();
	if(isset($_SESSION['user']) ){
            require_once 'db.php';
		$user=$_SESSION['user'];
?>

<?php
$fd = fopen("spravka.txt", 'w') or die("не удалось создать файл");
$str0 = "\t\t\t\tOtchet o voennoobyazannom Studente";
$str1 = "\n\t\tSpravka o tom chto ".$user['name']." ".$user['surname']." deistvitelno yavlaetsya Studentom IITU\n";
$str2 = "\t\t\t\tA takje grazhdaninom RK";
$str3 = "\n\t\t\t\tMesto ucheby:".$user['university_id'];
fwrite($fd, $str0);
fwrite($fd, $str1);
fwrite($fd, $str2);
fwrite($fd, $str3);
fclose($fd);
$uri = "edit_profile.php";
?>  

<?php  
} 
else{
    }
}
header("Location:$uri");

?>
