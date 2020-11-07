<?php 
setcookie("Nombre" ,$_POST['nombre'], time() + (86400 * 30), '/');
setcookie("Apellido" ,$_POST['apellido'], time() + (86400 * 30), '/');
setcookie("Status" ,$_POST['status'], time() + (86400 * 30), '/');
setcookie("Carrera" ,$_POST['carrera'], time() + (86400 * 30), '/');
setcookie("Materia" ,$_POST['materia'], time() + (86400 * 30), '/');
setcookie("Foto" ,$_POST['foto'], time() + (86400 * 30), '/');
header('location:index.php');
?>