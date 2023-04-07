<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = '3D Parallax Background - HD Wallpapers in 3D'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Dale a tu pantalla de inicio de una profundidad 3D real con control del giroscopio fondos de paralaje de varias capas - ver el video para presenciar el efecto impresionante.</p><p>Con temas que se envía a los usuarios sobre una base diaria tenemos una selección cada vez mayor de temas en 3D para que usted pueda elegir</p><p>Descargar <strong>3D Parallax Background - HD Wallpapers in 3D&nbsp;</strong>APK en LOMUCHACHOgames y personaliza con el estilo que mas te guste tu movil.</p>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';