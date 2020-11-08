<?php
    // setcookie('Name',$_POST('nombre'));
    setcookie('LastName',$_POST('apellido'));
    setcookie('Status',$_POST('status'));
    setcookie('Carrear',$_POST('carrera'));
    setcookie('Materia',$_POST('materia'));
    setcookie('Foto',$_POST('foto'));
    header('location:Index.php');
?>