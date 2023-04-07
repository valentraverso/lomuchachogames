<?php 
include_once '../../php/conexion-database.inc.php';
$select = "SELECT * FROM juegos WHERE nombre = 'evertale'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$ft = "$fila[texto]";
$creador= "$fila[creador]";
$titulopagina =  "Todas las versiones de evertalepara Android - Descargar evertale ultima version";

 include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/versiones.php';