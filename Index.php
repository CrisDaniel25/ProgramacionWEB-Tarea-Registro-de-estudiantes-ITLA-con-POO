<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programacion WEB Tarea Registro de estudiantes ITLA con POO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" id="tittle">
  Programacion WEB Tarea Registro de estudiantes ITLA
  <span>  By Cristopher Figueroa | Matricula: 2018-6186</span>
  </a>
</nav>
</header>

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