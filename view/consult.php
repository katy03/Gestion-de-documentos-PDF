<?php 
    $id=$_GET['id'];
    include "../model/connect.php";
    $conexion=conexion();
    $consulta=consult($conexion,$id);

    $categoria=$consulta['categoria'];
    $nombre=$consulta['nombre'];
    $archivo=$consulta['archivo'];
    $valor_tipo="Content-type:.pdf";
    header("Content-type:.pdf");
    header("Content-Disposition:inline;filename=$nombre.$categoria");
    echo $archivo;
?>