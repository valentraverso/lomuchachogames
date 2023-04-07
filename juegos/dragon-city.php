<?php 
include $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
//Take the game data from data base
$select = "SELECT * FROM juegos WHERE id = 581";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
//The template we use for the game page
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v2.php';
?>