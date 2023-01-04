<?php
	include (connect.php);
	
	$conexion = $conexion();
	
	function colsulta($conexion){
		$sql = "SELECT * FROM tbarchivos";
		$query = mysqli_query($conexion, $sql);
		return $query;
	}
?>