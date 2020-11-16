<?php
require_once '../../Service/IService.php';
require_once '../../Student/StudentServiceCookies.php';
require_once '../../Student/Student.php';

$service = new StudentServiceCookies();

if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['estatus']) && isset($_POST['carrera']) && isset($_POST['materias']) && isset($_POST['fotoPerfil'])) {

    $newStudent = new Student();

    $newStudent->Initialize(0, $_POST['nombre'], $_POST['apellido'], $_POST['estatus'], $_POST['carrera'], $_POST['materias'], $_POST['fotoPerfil']);

    $service->Add($newStudent);

    header("location: ../../Index.php");
}
?>