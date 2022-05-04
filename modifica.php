<?php

session_start();
require 'Logic/connect.php';
$usuario = $_SESSION['username'];

//echo "<h1>BIENVENIDO $usuario </h1>";

//echo "<a href='Logic/exit.php'>Exit<a>";
$codigo = $_GET['codigo'];
$sql = "SELECT * FROM gpymc WHERE codigo = '$codigo'";

$result = mysqli_query($connection, $sql);
$row = $result->fetch_array(MYSQLI_ASSOC);

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
      
      <form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
        <div class="form-group">
          <label for="nombres" class="col-sm-2 control-label">Nombres</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" value="<?php echo $row['Nombres']; ?>" required>
          </div>
        </div>
        
        <div class="form-group">
          <label for="codigo" class="col-sm-2 control-label">Codigo</label>
          <div class="col-sm-10">
           <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo"  value="<?php echo $row['codigo']; ?>" required>
          </div>
        </div>
        
        <div class="form-group">
          <label for="tipoInscripcion" class="col-sm-2 control-label">Tipo de Inscripcion</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="tipoInscripcion" name="tipoInscripcion" placeholder="Tipo Inscripcion"  value="<?php echo $row['tipoInscripcion']; ?>">
          </div>
        </div>
        
         <div class="form-group">
          <label for="telefono" class="col-sm-2 control-label">Telefono</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono"  value="<?php echo $row['telefono']; ?>">
          </div>
        </div>

         <div class="form-group">
          <label for="pregraado" class="col-sm-2 control-label">Pregrado</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pregrado" name="pregrado" placeholder="Pregrado"  value="<?php echo $row['Pregrado']; ?>">
          </div>
        </div>

         <div class="form-group">
          <label for="universidad" class="col-sm-2 control-label">Universidad</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="universidad" name="universidad" placeholder="Universidad"  value="<?php echo $row['universidad']; ?>">
          </div>
        </div>

         <div class="form-group">
          <label for="email" class="col-sm-2 control-label">E-mail</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail"  value="<?php echo $row['email']; ?>">
          </div>
        </div>

         <div class="form-group">
          <label for="residencia" class="col-sm-2 control-label">Residencia</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="residencia" name="residencia" placeholder="Residencia"  value="<?php echo $row['Residencia']; ?>">
          </div>
        </div>

         <div class="form-group">
          <label for="fechaGrado" class="col-sm-2 control-label">Fecha Grado</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="fechaGrado" name="fechaGrado" placeholder="Fecha Grado"  value="<?php echo $row['FechaGrado']; ?>">
          </div>
        </div>

         <div class="form-group">
          <label for="ciudad" class="col-sm-2 control-label">Ciudad</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad"  value="<?php echo $row['Ciudad']; ?>">
          </div>
        </div>

         <div class="form-group">
          <label for="empresa" class="col-sm-2 control-label">Empresa</label>
          <div class="col-sm-10">
            <input type="tet" class="form-control" id="empresa" name="empresa" placeholder="Empresa"  value="<?php echo $row['Empresa']; ?>">
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
