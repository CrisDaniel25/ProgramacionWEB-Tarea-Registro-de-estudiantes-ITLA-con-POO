<?php
require_once '../../Service/IService.php';
require_once '../../Student/StudentServiceCookies.php';
require_once '../../Student/Student.php';

$service = new StudentServiceCookies();

$isContainid = isset($_GET['id']);

if ($isContainid) {
 
    $studentID = $_GET['id'];
    $service->Delete($studentID);
    header("location: ../../Index.php");
}
?>
