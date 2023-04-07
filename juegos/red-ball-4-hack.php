<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Red Ball 4 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Alerta roja, unos malvados monstruos quieren aplastar el planeta y reducirlo a un cuadrado. Quién tiene pelotas para salvar el mundo. Sí, colega, te estoy mirando a ti, Red Ball al rescate.</p><p>Rueda, salta y rebota a través de 75 emocionantes niveles llenos de aventuras. Consigue sortear trampas muy complicadas y derrota a todos los monstruos.</p><p>Descarga&nbsp;<strong>Red Ball 4 HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y trata de que la bola roja pase todos los obstáculos.</p><p><strong>Red Ball 4 HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';