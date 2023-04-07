<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Sonic 4 Episode I'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.2 o +";
$texto = "<p>Por fin llega la continuación que los fans llevan esperando 16 años: Sonic The Hedgehog 4 Episode I. Con elementos de juego mejorados, incluidos el clásico Torbellino y el versátil Ataque teledirigido, Sonic 4 toma el testigo de Sonic and Knuckles.</p><p>Están disponibles todos los movimientos clásicos de Sonic, incluido el reciente Ataque teledirigido, que añadirá un nuevo nivel de control y emoción. Corre a lo largo de 4 zonas únicas con 4 actos cada una, así como 7 fases especiales. Dos niveles exclusivos diseñados específicamente que utilizan el acelerómetro. Revive esas fases especiales tan populares en los juegos de la época Mega Drive en las que los aficionados podrán obtener las 7 Chaos Emeralds y desbloquear a Super Sonic.</p><p>Descarga&nbsp;<strong>Sonic 4 Episode I</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y haz ganar a Sonic</p><p><strong>Sonic 4 Episode I</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>2 NIVELES EXCLUSIVOS</li><li>NUEVOS MOVIMIENTOS</li><li>VUELVEN LAS FASES ESPECIALES</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';