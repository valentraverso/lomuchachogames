<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Brawl Stars HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.3 o +";
$texto = "<p>Pelea junto con tus amigos o en solitario en una gran variedad de modos de juego de menos de tres minutos. Desbloquea y mejora brawlers que cuentan con potentes superataques.&nbsp;</p><p>Compra y colecciona aspectos exclusivos para que tus personajes destaquen en el campo de batalla. Crea o únete a un club para compartir estrategias y pelear con otros jugadores.</p><p>Descarga&nbsp;<strong>Brawl Stars HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y gana todas la partidas.</p><p><strong>Brawl Stars HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';