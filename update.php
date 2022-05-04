<?php
	
	require 'Logic/connect.php';


  $nombres = $_POST['nombres'];
  $codigo = $_POST['codigo'];
  $tipoInscripcion = $_POST['tipoInscripcion'];
  $telefono = $_POST['telefono'];
  $pregrado = $_POST['pregrado'];
  $universidad = $_POST['universidad'];
  $email = $_POST['email'];
  $residencia = $_POST['residencia'];
  $fechaGrado = $_POST['fechaGrado'];
  $ciudad = $_POST['ciudad'];
  $empresa = $_POST['empresa'];
	
	
	 $query = "UPDATE gpymc SET Nombres='$nombres', codigo='$codigo', tipoInscripcion='$tipoInscripcion', telefono='$telefono', Pregrado='$pregrado', universidad='$universidad', email='$email', Residencia='$residencia', FechaGrado='$fechaGrado', Ciudad='$ciudad', Empresa='$empresa' WHERE codigo='$codigo'";
  $result = mysqli_query($connection, $query);
	
?>
 
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($result) { ?>
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>