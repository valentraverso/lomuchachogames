<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Final Kick 2019 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Juega rondas de penales gratis con los mejores equipos, logrando los mejores goles. Perfecciona tus tiros de fútbol,​chuta con efectos especiales y convierteté en el campeón del mundo.</p><p>Con repeticiones de penales en cámara lenta para ver los mejores goles de fútbol desde todos los ángulos, captura real de movimiento usando jugadores reales.</p><p>Descarga&nbsp;<strong>Final Kick 2019 HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y trata de anotar lo que mas puedas.</p><p><strong>Final Kick 2019 HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';