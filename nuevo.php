<?php

session_start();
$usuario = $_SESSION['username'];

//echo "<h1>BIENVENIDO $usuario </h1>";

//echo "<a href='Logic/exit.php'>Exit<a>";


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <!-- BOOTSTRAP 4  -->
    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
  </head>
  <body>
      
   <div class="container">
      <div class="row">
        <h3 style="text-align:center">NUEVO REGISTRO</h3>
      </div>
      
      <form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
        <div class="form-group">
          <label for="nombres" class="col-sm-2 control-label">Nombres</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" required>
          </div>
        </div>
        
        <div class="form-group">
          <label for="codigo" class="col-sm-2 control-label">Codigo</label>
          <div class="col-sm-10">
           <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo" required>
          </div>
        </div>
        
        <div class="form-group">
          <label for="tipoInscripcion" class="col-sm-2 control-label">Tipo de Inscripcion</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="tipoInscripcion" name="tipoInscripcion" placeholder="Tipo Inscripcion">
          </div>
        </div>
        
         <div class="form-group">
          <label for="telefono" class="col-sm-2 control-label">Telefono</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
          </div>
        </div>

         <div class="form-group">
          <label for="pregraado" class="col-sm-2 control-label">Pregrado</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pregrado" name="pregrado" placeholder="Pregrado">
          </div>
        </div>

         <div class="form-group">
          <label for="universidad" class="col-sm-2 control-label">Universidad</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="universidad" name="universidad" placeholder="Universidad">
          </div>
        </div>

         <div class="form-group">
          <label for="email" class="col-sm-2 control-label">E-mail</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
          </div>
        </div>

         <div class="form-group">
          <label for="residencia" class="col-sm-2 control-label">Residencia</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="residencia" name="residencia" placeholder="Residencia">
          </div>
        </div>

         <div class="form-group">
          <label for="fechaGrado" class="col-sm-2 control-label">Fecha Grado</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="fechaGrado" name="fechaGrado" placeholder="Fecha Grado">
          </div>
        </div>

         <div class="form-group">
          <label for="ciudad" class="col-sm-2 control-label">Ciudad</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad">
          </div>
        </div>

         <div class="form-group">
          <label for="empresa" class="col-sm-2 control-label">Empresa</label>
          <div class="col-sm-10">
            <input type="tet" class="form-control" id="empresa" name="empresa" placeholder="Empresa">
          </div>
        </div>
        
        
        
        
        
       
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <a href="index.php" class="btn btn-default">Regresar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </div>
      </form>
    </div>
 
    <a href='Logic/exit.php'>Exit<a>
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <!-- Frontend Logic -->
     </body>

</html>
