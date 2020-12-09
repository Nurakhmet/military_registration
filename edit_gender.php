<?php
$uri = "?error";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['id']) && isset($_POST['name'])) {
        $uri = "?id=" . $_POST['id'] . "&error";
        require_once 'db.php';
        if (edit_gender($_POST['id'], $_POST['name'])) {
            $uri = "?id=" . $_POST['id'] . "&success";
        }
    }
}
header("Location:post_faculty.php$uri");
?>