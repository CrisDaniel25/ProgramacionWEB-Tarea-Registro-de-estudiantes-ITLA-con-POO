<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programacion WEB Tarea Registro de estudiantes ITLA con POO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="Css/Style.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" id="tittle">
  Programacion WEB Tarea Registro de estudiantes ITLA con POO
  <span>  By Cristopher Figueroa | Matricula: 2018-6186</span>
  </a>
</nav>
</header>

<div class="container">
<div class="row">

<form action="Method/Add/Add.php" method="post">
<div class="row">
<div class="col-sm">
<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text bg-white">
        <i class="fas fa-user-circle"></i>
      </div>
    </div>
    <input class="form-control" placeholder="Nombre" name="nombre" type="text">
  </div>
</div>
</div>

<div class="col-sm">
<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text bg-white">
        <i class="fas fa-user-circle"></i>
      </div>
    </div>
    <input class="form-control" placeholder="Apellido" name="apellido" type="text">
  </div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm">
<div class="form-group">  
  <input type="radio" name="status" value="Activo"> Activo 
  <input type="radio" name="status" value="Inactivo"> Inactivo 
</div> 
</div>

<div class="col-sm">
<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text bg-white">
        <i class="fas fa-university"></i>
      </div>
    </div>
    <input class="form-control" name="carrera" placeholder="Carrera" type="text">
  </div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm">
<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text bg-white">
        <i class="fas fa-university"></i>
      </div>
    </div>
    <input class="form-control" name="materia" placeholder="Materia" type="text">
  </div>
</div>
</div>

<div class="col-sm">
<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text bg-white">
        <i class="fas fa-university"></i>
      </div>
    </div>
    <input class="form-control" name="foto" placeholder="Foto" type="text">
  </div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm">
<button type="submit" name="create" value="Create" class="btn btn-success btn-lg btn-block">
  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-archive-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
  </svg>
</button>
</div>
<div class="col-sm">
<button type="reset" value="Clear" class="btn btn-danger btn-lg btn-block"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg>
</button>
</div>
</div>
</form>

<table class="table table-hover">
	<thead class="thead-dark">
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Status</th>
    <th>Carrera</th>
    <th>Materias</th>
    <th>Foto</th>
    <th></th>
  </thead>
  <tbody>
    <tr>
			<td><?php echo $_COOKIE["Name"];?></td>
			<td><?php echo $_COOKIE["Apellido"];?></td>
			<td><?php echo $_COOKIE["Status"];?></td>
			<td><?php echo $_COOKIE["Carrera"];?></td>
      <td><?php echo $_COOKIE["Materia"];?></td>
      <td><?php echo $_COOKIE["Foto"];?></td>
      <td>
<a href="Delete.php?id=<?php echo $key;?>" class="btn btn-danger"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg>
</a>
<a href="Edit.php?id=<?php echo $key;?>" class="btn btn-warning"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
  </svg>
</a>
      </td>
    </tr>
  </tbody>
</table>
</div>
</div>

<footer class="page-footer font-small special-color-dark pt-4"> 
  <div class="container-fluid text-center text-md-left">
    <div class="row">
      <div class="col-md-6 mt-md-0 mt-3">
        <p>En la pagina principal debe tener un listado de los estudiantes que muestre parte de la información 
        almacenada de los estudiantes(Nombre, Apellido , carrera a la cual pertenece, foto de perfil y si esta 
        activo o no) y se debe poder filtrar por carrera (Redes, Software, Multimedia, Mecatronica y Seguridad 
        informática).</p>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-6 mb-md-0 mb-3">
        <p>Se debe poder crear nuevos estudiantes, editarlo, ver un detalle del mismo y eliminarlo 
        (Al momento de eliminar un estudiante se debe pedir confirmación sobre si esta seguro de querer realizar 
        esta acción), la información de los estudiantes deben estar almacenada en cookies, No en base de datos , 
        no en archivos  , en una cookies(Para mas informacion consulte los materiales de la semana). </p>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-6 mb-md-0 mb-3">
        <p>En la sección del detalle del estudiante debe poder visualizarse toda su información 
        (nombre, apellido, carrera a la cual pertenece,si esta activo o no , listado de sus materias favoritas
        y foto de perfil). </p>

       <ul>
        <li>Nota muy importante: Debe utilizar programación orientada a objetos para encapsular las 
        funcionalidades de su proyecto, ejemplo las funciones que utilizamos para los layout y las funciones 
        que definimos en utilities deben estar dentro de una clase y y dicha funciones definida como métodos 
        dentro de esa clase y los datos del estudiantes también debe estar encapsulado en una clase estudiantes.</li>
        <li>Nota Importante: Esta tarea debe ser subida a github utilizando git para poder ser calificada, 
        no es opcional.</li>
        <li>Nota menos importante: Cuando creamos un estudiantes este se creara en estado activo por default, 
        pero durante la edición podemos cambiar este estado, para controlar este valor deben utilizar el 
        componente html checkbox, en el listado de los estudiantes en la pagina principal debe de diferenciarse 
        cuando un estudiante esta activo o inactivo.</li>
       </ul>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-6 mb-md-0 mb-3">
      <p>Los datos de los estudiantes son:</p>
        <ul>
            <li>Nombre</li>
            <li>Apellido</li>
            <li>Status (Si esta activo o no)</li>
            <li>Carrera a la cual pertenece</li>
            <li>Materias favoritas</li>
            <li>Foto de perfil</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© 2020 Copyright by
    <a href="https://github.com/CrisDaniel25"> Cristopher Figueroa</a>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>