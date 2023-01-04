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
				<div class="col-6"><h1>Gestion de documentos PDF</h1></div>
				<div class="col-3"></div>
			</div>
			<form method="POST" enctype="multipart/form-data" action="controller/insert.php">
				<div class="row">
					<div class="col-2">Nombre del archivo</div>
<<<<<<< HEAD
					<div class="col-6"><input class="form-control" type="text" name="nombre_archivo"></div>
=======
					<div class="col-6"><input class="form-control" type="text" name="nombre_archivo" required ></div>
>>>>>>> 5ac32be (Se agrego el archivo con el sql de la base de datos)
					<div class="col-4"></div>
				</div>
				<div class="row">
					<div class="col-2">Seleccione el archivo</div>
<<<<<<< HEAD
					<div class="col-6"><input class="form-control" type="file" id="formFile" name="archivo"></div>
					<div class="col-4"><button class="btn btn-outline-primary">Subir archivo</button></div>
				</div>				
			</form>
=======
					<div class="col-6"><input class="form-control" type="file" id="formFile" name="archivo" required></div>
					<div class="col-4"><button class="btn btn-outline-primary">Subir archivo</button></div>
				</div>				
			</form>
			
			
>>>>>>> 5ac32be (Se agrego el archivo con el sql de la base de datos)
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Categoria</th>
					<th scope="col">Fecha de ingreso</th>
					<th scope="col">Archivo</th>
					<th scope="col">Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include 'model/connect.php';
					$conexion = conexion();
                    $query = consulta($conexion);
					while($datos = mysqli_fetch_assoc($query)){
						$id = $datos['id']; 
						$nombre = $datos['nombre'];
						$categoria = $datos['categoria'];
						$fecha = $datos['fecha'];
						$archivo = $datos['archivo'];
						
						$valor = "<img width = '23' src = 'img/logopdf.jpeg'>";						
				?>
						<tr>
							<td><?php echo $nombre; ?></td>
							<td><?php echo $categoria; ?></td>
							<td><?php echo $fecha; ?></td>
							<td><a href="view/consult.php?id=<?php echo $id; ?>" target="_blank"><?php echo $valor ;?> Ver</a></td>
							<td>
								<a href="view/edit.php?id=<?php echo $id?>" class="btn btn-primary btn-sm">Editar</a>
								<a href="controller/delete.php?id=<?php echo $id?>" class="btn btn-danger btn-sm">Eliminar</a>
							</td>
						</tr>
				<?php
					}
				?>				
			</tbody>
		</table>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>