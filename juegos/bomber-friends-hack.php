<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Bomber Friends HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Consigue Bomber Friends ahora y únete al juego de multijugador en línea inmensamente agitado y divertido. Bombardea a tus amigos y sé el último en sobrevivir para ganar la partida.&nbsp;</p><p>Recoge potenciadores para obtener bombas más potentes! ¡Usa las bombas explosivas para volar a tus amigos desde el otro lado del mapa. Nueva arena multijugador que mejora y añade más recompensas al juego en línea.</p><p>Descarga&nbsp;<strong>Bomber Friends HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y trata de ganar la partida siendo el número uno.</p><p><strong>Bomber Friends HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juegos</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';