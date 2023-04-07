<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Kingdom Rush Origins MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Kingdom Rush Origins es la tercera entrega de la galardonada saga Kingdom Rush, que ya adoran millones de jugadores y no deja de recibir elogios de jugadores y críticos de todo el mundo.&nbsp;</p><p>Emprende un viaje a los inicios, antes de que a Vez'nan se le pasara por la mente amenazar el reino con la gema de poder, y experimenta más esa dinámica de juego vertiginosa y cautivadora al extremo que hizo de la franquicia la piedra angular de los juegos de defensa de torres imprescindibles.</p><p>Descarga&nbsp;<strong>Kingdom Rush Origins MOD</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y derriba a todos los enemigos.</p>";
$info = "<p><strong>Kingdom Rush Origins MOD</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.4 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';