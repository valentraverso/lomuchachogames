<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Esports Life Tycoon MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Gestiona tu propio equipo de esports. Ficha a los mejores jugadores. Entrena a tus superestrellas. Enfréntate a distracciones y eventos críticos antes de cada partido.&nbsp;</p><p>Expande tu equipo y tu gaming house para ganar los torneos más importantes de todo el mundo, hasta convertirte en el mayor equipo campeón de esports.</p><p>Descarga&nbsp;<strong>Esports Life Tycoon MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y conviértete en el mejor director de toda la historia.</p>";
$info = "<p><strong>Esports Life Tycoon MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.4 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';