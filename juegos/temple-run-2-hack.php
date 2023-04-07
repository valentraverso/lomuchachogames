<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Temple Run 2 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Con más de un trillón de descargas, Temple Run redefinido los juegos móviles. Ahora obtiene más de la carrera estimulante, saltar, girar y deslizar que amas en Temple Run 2.&nbsp;</p><p>Navegar peligrosos acantilados, tirolinas, minas y bosques a medida que tratan de escapar con el ídolo maldito. Hasta dónde puede correr.</p><p>Descarga&nbsp;<strong>Temple Run 2 HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y corre lo mas posible.</p><p><strong>Temple Run 2 HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Monedas Infinitas</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';