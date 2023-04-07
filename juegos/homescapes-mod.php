<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Homescapes MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Te damos la bienvenida a Homescapes. Ayuda a Austin el mayordomo a devolverle el calor y el esplendor a la maravillosa mansión de su familia. Adelante, pasa: ¡te esperan montones de aventuras nada más cruzar el umbral.</p><p>Supera coloridos niveles de combinación para reformar y decorar las habitaciones de la mansión, ¡y desbloquea más y más capítulos de la emocionante historia de la familia.</p><p>Descarga&nbsp;<strong>Homescapes MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y disfruta del MOD</p>";
$info = "<p><strong>Homescapes MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.2 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';