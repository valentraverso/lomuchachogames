<?php 
include_once '../../php/conexion-database.inc.php';
$select = "SELECT * FROM juegos WHERE nombre = 'NBA 2K20'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$ft = "$fila[texto]";
$creador= "$fila[creador]";
$titulopagina =  "Todas las versiones de NBA 2K20para Android - Descargar NBA 2K20 ultima version";

include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/versiones.php';