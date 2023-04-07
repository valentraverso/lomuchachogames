<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'PACYBITS FUT 20 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Crea borradores ilimitados y abre paquetes ilimitados. Descubre las últimas cartas y crea escuadrones. Completa objetivos diarios y semanales, y desafíos de construcción de escuadrones para ganar recompensas únicas.&nbsp;</p><p>Compite en nuevos modos online y offline. Recoge cartas nuevas e intercambialas con otros jugadores. Demuestra que eres el mejor jugador y construye el mejor club.</p><p>Descarga&nbsp;<strong>PACYBITS FUT 20 HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y elige tu mejor equipo.</p><p><strong>PACYBITS FUT 20 HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Monedas Ilimitadas</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';