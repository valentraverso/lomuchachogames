<?php 
include $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
$select = "SELECT * FROM juegos WHERE id = '528'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
include_once '../templates/game/v2.php';
?>