<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Draw Cartoons 2 PRO'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p><strong>Draw Cartoons 2 PRO</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Animación esquelética: los personajes se mueven como muñecas</li><li>Cada cuadro se transforma sin problemas al siguiente</li><li>Numerosos modelos incorporados</li></ul>";
$mod = "";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';