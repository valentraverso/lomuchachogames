<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Archero HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$ft = $fila['texto'];
$creador= "$fila[creador]";
$titulopagina =  "Todas las versiones de Archero HACKpara Android - Descargar Archero HACK ultima version";

include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/versiones.php';