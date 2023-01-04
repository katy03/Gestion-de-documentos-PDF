<?php
	function conexion(){
		$con=mysqli_connect('localhost','root','','dbcrudpdf');
		return $con;
	}
		
	function consulta($conexion){
		$sql = "SELECT * FROM tbarchivos";
		$query = mysqli_query($conexion, $sql);
		return $query;
	}
	
	function insertar($conexion, $nombre, $categoria, $fecha, $archivoBLOB){
		$sql = "INSERT INTO tbarchivos(nombre, categoria, fecha, archivo) values ('$nombre', '$categoria', '$fecha', '$archivoBLOB')";
		$query = mysqli_query($conexion, $sql);
		return $query;
	}
	
	function eliminar($conexion,$id){
		$sql="DELETE from tbarchivos WHERE id=$id";
		$query=mysqli_query($conexion,$sql);
		return $query;
	}
	
	function consult($conexion,$id){
		$sql="SELECT * FROM tbarchivos WHERE id=$id";
		$query=mysqli_query($conexion,$sql);
		$consult=mysqli_fetch_assoc($query);
		return $consult;
	}
	
	function actualizarNom($conexion,$id,$nombre){
		$sql="UPDATE tbarchivos SET nombre='$nombre' WHERE id=$id";
		$query=mysqli_query($conexion,$sql);
		return $query;
	}
	
	function actualizarArch($conexion,$id,$categoria,$fecha,$archivoBLOB){
		$sql="UPDATE tbarchivos SET categoria='$categoria',fecha='$fecha',archivo='$archivoBLOB' WHERE id=$id";
		$query=mysqli_query($conexion,$sql);
		return $query;
	}
	
	function actualizar($conexion,$id,$nombre,$categoria,$fecha,$archivoBLOB){
		$sql="UPDATE tbarchivos SET nombre='$nombre', categoria='$categoria',fecha='$fecha',archivo='$archivoBLOB' WHERE id=$id";
		$query=mysqli_query($conexion,$sql);
		return $query;
	}
?>