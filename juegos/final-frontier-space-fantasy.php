<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Final Frontier: Space Fantasy'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Es el año 3018. Después del agotamiento de los recursos naturales en la Tierra, la colonización del espacio parece ser el único camino para que la humanidad sobreviva.&nbsp;</p><p>Conviértete en un capitán intergaláctico y dirige esta misión para descubrir nuevos planetas donde la civilización humana pueda prosperar. Explora nuevos mundos donde ningún hombre ha llegado jamás mientras te enfrentas a situaciones generadas por los diferentes personajes.</p><p>Descarga&nbsp;<strong>Final Frontier: Space Fantasy</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y se el mejor capitan.</p><p><strong>Final Frontier: Space Fantasy</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Divertida mecánica</li><li>Toda una nueva galaxia a explorar</li><li>Narrativa rica y profunda</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';