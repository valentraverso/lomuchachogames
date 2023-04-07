<?php 
include_once '../../php/conexion-database.inc.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Spotify Premium MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$ft = "$fila[texto]";
$creador= "$fila[creador]";
$titulopagina =  "Todas las versiones de Spotify Premium MODpara Android - Descargar Spotify Premium MOD ultima version";
 include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/versiones.php';