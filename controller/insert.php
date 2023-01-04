<?php 

<<<<<<< HEAD
=======
$permitidos = " abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_.";
>>>>>>> 5ac32be (Se agrego el archivo con el sql de la base de datos)
#capturar los datos
    $nombre=$_POST['nombre_archivo'];
    $archivo=$_FILES['archivo'];
    var_dump($archivo);
#categoria
	$categoria=explode('.',$archivo['name'])[1];

#fecha
	$fecha=date('Y-m-d H:i:s');

	$tmp_name=$archivo['tmp_name'];
	$contenido_archivo=file_get_contents($tmp_name);
	$archivoBLOB=addslashes($contenido_archivo);

	include '../model/connect.php';
	
<<<<<<< HEAD
	if($categoria == 'pdf'){
		$conexion=conexion();
	
=======
	 
   for ($i=0; $i<strlen($nombre); $i++){
      if (strpos($permitidos, substr($nombre,$i,1))===false){
         echo '<script language="javascript">alert("Caracteres no permitidos");window.location.href="../index.php"</script>';
		 
		 }
   }
   
	if($categoria =='pdf'){
		$conexion=conexion();

>>>>>>> 5ac32be (Se agrego el archivo con el sql de la base de datos)
		$query=insertar($conexion,$nombre,$categoria,$fecha,$archivoBLOB);
		if($query){
			header('location:../index.php?insertar=success');
		}else{
			header('location:../index.php?insertar=error');
		}
	}else{
		echo '<script language="javascript">alert("Solo se permite cargar archivos .pdf");window.location.href="../index.php"</script>';
		
	}
<<<<<<< HEAD
=======
	   
   
  

	
	
>>>>>>> 5ac32be (Se agrego el archivo con el sql de la base de datos)
?>