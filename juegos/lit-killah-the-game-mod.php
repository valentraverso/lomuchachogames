<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'LIT killah The Game MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Escucha la música, sigue el ritmo y usa tus reflejos con LIT killah y siente el trap.&nbsp;</p><p>Toca las notas en el momento perfecto, personaliza tu ávatar y desbloquea nuevos desafíos. Supérate a tí mismo y crea tus propios niveles con las canciones originales de LIT killah para compartir con tus amigos y el mundo. Demuestra tu flow.</p><p>Descarga&nbsp;<strong>LIT killah The Game MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y sumergete al trap.</p>";
$info = "<p><strong>LIT killah The Game MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "5.0.o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';