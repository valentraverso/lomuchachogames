<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Sonic Unleashed 2D'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Conoce Sonic un eriso con zapatos rojos que corre a velocidades supersonicas. Sonic Unleashed es un juego en 2D que se jugaba en las primeras PlayStation y ahora llega adaptado para el movil.</p><p>Ahora podras jugar con Sonic y sus amigos desde tu dispositivo android.</p><p>Descarga&nbsp;<strong>Sonic Unleashed 2D</strong>&nbsp;gratis para Android full apk en LOMUCHACHOgames y revivi tus epocas de gloria.</p><p>Mas cosas sobre Sonic Unleashed 2d:</p><ul><li>Juga a Sonic gratis en Android</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';