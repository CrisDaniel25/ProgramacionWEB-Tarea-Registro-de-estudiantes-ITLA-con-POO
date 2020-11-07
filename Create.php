<?php 

setcookie("username" ,$_POST['nombre'], time() + (86400 * 30), '/');
header('location:index.php');
?>