<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Goat Simulator Payday'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Goat Simulator Payday es el nuevo simulador de esta saga de juegos cabrunos existentes en el universo continental y ahora esto se va a poner mucho peor y alocado.</p><p>Diviertete, juega, pelea, haz lo que quieras con este juego de simulacion galactico que su personaje principal es una grandiosa cabra alocada y recordemos que es la mas linda de la historia. Divertidisimo juego de cabras que roban bancos, atropellan cosas y saltan de diferentes lugares.</p><p>Descarga <strong>Goat Simulator Payday</strong>&nbsp;gratis apk + datos obb en LOMUCHACHOgames y recorre el mundo con esta loca y nueva cabra.</p><p>Mas cosas sobre Goat Simulator Payday:</p><ul><li>&nbsp;Nuevas 4 cabaras locas</li><li>&nbsp;Pueden volar y controlar los cerebros, &nbsp;subir a cualquier superficie con una silla de ruedas, escupir el agua que almacena en su espalda</li><li>&nbsp;Puedes robar y conducir coches</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';