<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Sonic Jump Pro'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3.3 o +";
$texto = "<p>Salta, rueda y machaca hasta el cielo mientras te enfrentas al Dr. Eggman con Sonic y sus amigos. En Sonic Jump correrás nuevas aventuras al estilo arcade. Inclina y toca la pantalla para superar los niveles del modo historia y los modos infinitos de Arcade. Visita nuevos y legendarios niveles de Sonic y diviértete durante horas. Desafía a tus amigos de todo el mundo para ver quién salta más lejos.</p><p>Juega con tus personajes favoritos, incluyendo Sonic, Tails, Knuckles, Amy, Rouge, Silver y Blaze, cada uno con sus propias habilidades únicas.</p><p>Descarga&nbsp;<strong>Sonic Jump Pro</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y revive los viejos tiempos.</p><p><strong>Sonic Jump Pro</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>JUEGA CON TUS PERSONAJES FAVORITOS</li><li>MUNDOS INCREÍBLES</li><li>MODO ARCADE E HISTORIA</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';