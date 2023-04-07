<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Flashback Mobile'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "6.0 o +";
$texto = "<p>Este clásico de la ciencia ficción de 1993, uno de los primeros juegos en utilizar la tecnología de rotoscopio para crear animaciones realistas, con fondos dibujados totalmente a mano, incluye ahora un modo moderno, con filtros gráficos Post-FX, sonido y música completamente remasterizados, una nueva función de rebobinado y nivel de dificultad ajustable.</p><p>Con sus enemigos y secuestradores en los talones, Conrad debe defenderse de los peligros de este nuevo mundo al tiempo que desentraña un pérfido complot extraterrestre que amenaza al planeta. Redescubre la experiencia que se ha mantenido sistemáticamente entre los cien mejores juegos de todos los tiempos.</p><p>Descarga&nbsp;<strong>Flashback Mobile</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y disfruta al maximo esta leyenda de juego.</p><p>Flashback Mobile APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Corre el año 2142</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';