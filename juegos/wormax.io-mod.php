<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Wormax.io MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>La versión móvil MMO moderna del famoso juego wormax.io. Juega a Wormax online contra gente de todo el mundo o compite contra el ordenador en la modalidad de 1 jugador.&nbsp;</p><p>Invita a tus amigos para jugar juntos. Mejora a tu gusano y compite con los demás jugadores en el rating. Usa las habilidades activas y los boosters.</p><p>Descarga&nbsp;<strong>Wormax.io MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y derrota a tus contrincantes.</p>";
$info = "<p><strong>Wormax.io MOD</strong> APK para Android es una gran opción a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';