<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Piano Tiles 2 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>El juego gratis de música que ocupa entre los tres primeros. El juego gratis de música con desafío que atrae 1100 millones de jugadores y une el ritmo y música. Muestra tus éxitos a los amigos, compite con jugadores de todo el mundo en el ranking.</p><p>No toques la tecla blanca, toca teclas negras según ritmo, no se puede perder ninguno, concentrate, responde rápido. Audio perfecto, como escuchar un concierto.</p><p>Descarga&nbsp;<strong>Piano Tiles 2 HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y se el mas rapido con los dedos.</p><p><strong>Piano Tiles 2 HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Diamantes</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';