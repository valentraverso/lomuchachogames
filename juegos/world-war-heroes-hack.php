<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'World War Heroes HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Lucha contra jugadores de todo el mundo en un frenético combate en línea ambientado en la Segunda Guerra Mundial.<br>Destruye al enemigo y sobrevive a violentas batallas de tanques en el centro de Berlín y en otras ciudades.&nbsp;</p><p>Participa en combates a muerte y en equipo; planta bombas y defiéndelas. Intenta sobrevivir en el modo Intenso.</p><p>Descarga&nbsp;<strong>World War Heroes HACK</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y lucha en la guerra.</p><p><strong>World War Heroes HACK </strong>APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';