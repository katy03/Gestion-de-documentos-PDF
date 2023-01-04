<?php
<<<<<<< HEAD
#capturar los datos
    $id=$_POST['id'];
    $nombre=$_POST['nombre_archivo'];
    $archivo=$_FILES['archivo'];
    include '../model/connect.php';
    $conexion=conexion();
    $consulta=consult($conexion,$id);
    $nom=$consulta['nombre'];

    if(($archivo['size']==0 && $nombre!='') || ($archivo['size']==0 && $nombre!=$nom)){
        #modificar solo el nombre
        $query=actualizarNom($conexion,$id,$nombre);
        header("location:../index.php?id=$id&&actualizar=success");
    }else{
		echo '<script language="javascript">alert("no se ha echo ninguna modificacion");window.location.href="../view/edit.php"</script>';
	}

    #categoria
    $categoria=explode('.',$archivo['name'])[1];

    #fecha
    $fecha=date('Y-m-d H:i:s');

    $tmp_name=$archivo['tmp_name'];
    $contenido_archivo=file_get_contents($tmp_name);
    $archivoBLOB=addslashes($contenido_archivo);
	
	if($categoria == 'pdf'){

		if(($archivo['size']>0 && $nombre=='') || ($archivo['size']>0 && $nombre==$nom)){
			#modificar solo archivo
			$query=actualizarArch($conexion,$id,$categoria,$fecha,$archivoBLOB);
			header("location:../index.php?id=$id&&actualizar=success");

		}
		if(($archivo['size']>0 && $nombre!='') || ($archivo['size']>0 && $nombre!=$nom)){
			#modificar todo
			$query=actualizar($conexion,$id,$nombre,$categoria,$fecha,$archivoBLOB);
			header("location:../index.php?id=$id&&actualizar=success");
		}
	}else{
		echo '<script language="javascript">alert("Solo se permite cargar archivos .pdf");window.location.href="../index.php"</script>';
		//echo "<script>alert('Solo se permite cargar archivos .pdf');</script>";
	}




=======

$permitidos =" abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_.";
#capturar los datos
	include '../model/connect.php';
    $id=$_POST['id'];
    $nombre=$_POST['nombre_archivo'];
    $archivo=$_FILES['archivo'];
    $conexion=conexion();
	
    $consulta=consult($conexion,$id);
    $nom=$consulta['nombre'];

	for ($i=0; $i<strlen($nombre); $i++){
      if (strpos($permitidos, substr($nombre,$i,1))===false){
         echo '<script language="javascript">alert("Caracteres no permitidos");window.location.href="../view/edit.php?id='.$id.'"</script>';
		 
		 }
   }

	if(($archivo['size']==0 && $nombre!=='') && ($archivo['size']==0 && $nombre!==$nom)){ #modificar solo el nombre
        $query=actualizarNom($conexion,$id,$nombre);
        header("location:../index.php?id=$id&&actualizar=success");
		
    }elseif($archivo['size']!==0){
		
		#categoria
		$categoria=explode('.',$archivo['name'])[1];

		#fecha
		$fecha=date('Y-m-d H:i:s');

		$tmp_name=$archivo['tmp_name'];
		$contenido_archivo=file_get_contents($tmp_name);
		$archivoBLOB=addslashes($contenido_archivo);
		
		
		if($categoria == 'pdf'){

			if($archivo['size']>0 && $nombre==$nom){  #modificar solo archivo
				$query=actualizarArch($conexion,$id,$categoria,$fecha,$archivoBLOB);
				header("location:../index.php?id=$id&&actualizar=success");

			}
			if(($archivo['size']>0 && $nombre!='') && ($archivo['size']>0 && $nombre!=$nom)){	#modificar todo
				$query=actualizar($conexion,$id,$nombre,$categoria,$fecha,$archivoBLOB);
				header("location:../index.php?id=$id&&actualizar=success");
			}
		}else{
			echo '<script language="javascript">alert("Solo se permite cargar archivos .pdf");window.location.href="../view/edit.php?id='.$id.'"</script>';
		}
		
		
	}else{
		echo '<script language="javascript">alert("Error no se ha producido ninguna modificacion");window.location.href="../view/edit.php?id='.$id.'"</script>';
	}


    




?>
>>>>>>> 5ac32be (Se agrego el archivo con el sql de la base de datos)
