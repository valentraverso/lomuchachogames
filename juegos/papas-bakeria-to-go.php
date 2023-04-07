<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Bakeria To Go'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Tendrá que preparar pasteles con deliciosas costras y rellenos sabrosos, luego cubra el pastel con varios diseños de corteza, merengues o migas antes de meterlo en el horno. Después de que el pastel se haya horneado, es hora de decorarlo con una gran variedad de lloviznas, agitadores y coberturas antes de servir una porción a sus clientes hambrientos.&nbsp;</p><p>Whiskview Mall está decorado para celebrar diferentes días festivos durante todo el año, y desbloqueará nuevos ingredientes festivos a medida que vaya por deliciosos pasteles de temporada.</p><p>Descarga&nbsp;<strong>Papas Bakeria To Go </strong>apk ultima version&nbsp;en LOMUCHACHOgames y prepara los mejores pasteles.</p><p><strong>Papas Bakeria To Go</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>SABORES DE VACACIONES</li><li>SERVIR RECETAS ESPECIALES</li><li>PERSONALIZA A TUS TRABAJADORES</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';