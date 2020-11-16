<?php
require_once '../../Service/IService.php';
require_once '../../Student/StudentServiceCookies.php';
require_once '../../Student/Student.php';

$service = new StudentServiceCookies();

if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['status']) && isset($_POST['carrera']) && isset($_POST['materia']) && isset($_POST['foto'])) {

    $newStudent = new Student();

    $newStudent->Initialize(0, $_POST['nombre'], $_POST['apellido'], $_POST['status'], $_POST['carrera'], $_POST['materia'], $_POST['foto']);

    $service->Add($newStudent);
    echo "<p>dasdasd</p>";

    // header("Location: ../../Index.php");
    // exit();
}
?>