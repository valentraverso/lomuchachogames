<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'NBA 2K19'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4";
$texto = "";
include_once '../templates/game/v1.php';