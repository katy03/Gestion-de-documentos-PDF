<?php
	$id=$_GET['id'];
    include '../model/connect.php';
    $conexion=conexion();
    $consulta=consult($conexion,$id);
    $nombre=$consulta['nombre'];
    $categoria=$consulta['categoria'];
    $titulo=$nombre.'.'.$categoria;
    $archivo=$consulta['archivo'];
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Pdf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-3"></div>
				<div class="col-6"><h1><?php echo $titulo; ?></h1></div>
				<div class="col-3"></div>
			</div>
			<form method="POST" enctype="multipart/form-data" action="../controller/update.php">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="row">
					<div class="col-2">Nombre del archivo</div>
					<div class="col-6">
<<<<<<< HEAD
						<input class="form-control" type="text" name="nombre_archivo" value="<?php echo $nombre ;?>">
=======
						<input class="form-control" type="text" name="nombre_archivo" value="<?php echo $nombre ;?>" required>
>>>>>>> 5ac32be (Se agrego el archivo con el sql de la base de datos)
					</div>
					<div class="col-4"></div>
				</div>
				<div class="row">
					<div class="col-2">Seleccione el archivo</div>
<<<<<<< HEAD
					<div class="col-6"><input class="form-control" type="file" id="formFile" name="archivo"></div>
=======
					<div class="col-6"><input class="form-control" type="file" id="archivo" name="archivo"></div>
>>>>>>> 5ac32be (Se agrego el archivo con el sql de la base de datos)
					<div class="col-4"><button class="btn btn-outline-primary">modificar archivo</button></div>
				</div>
				<a class="btn btn-warning btn-sm" href="../index.php">Cancelar</a>				
			</form>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>