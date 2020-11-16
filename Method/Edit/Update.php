<?php
require_once '../../Service/IService.php';
require_once '../../Student/StudentServiceCookies.php';
require_once '../../Student/Student.php';

$service = new StudentServiceCookies();

if (isset($_GET['id'])) {

    $studentID = $_GET['id'];
    $element = $service->GetById($studentID);

    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['estatus']) && isset($_POST['carrera']) && isset($_POST['materias']) && isset($_POST['fotoPerfil'])) {
        
        $updateStudent = new Student();

        $updateStudent->Initialize($studentID, $_POST['nombre'], $_POST['apellido'], $_POST['estatus'], $_POST['carrera'], $_POST['materias'], $_POST['fotoPerfil']);
    
        $service->Update($studentID, $updateStudent);

        header("location: ../../Index.php");
    }
}
?>