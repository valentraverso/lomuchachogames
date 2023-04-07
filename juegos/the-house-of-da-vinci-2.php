<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'The House of Da Vinci 2'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "6.0 o +";
$texto = "<p>Métete en el papel de Giacomo, el aprendiz del genio renacentista Leonardo da Vinci. Explora un mundo repleto de puzles, ingenios mecánicos e inventos apabullantes.&nbsp;</p><p>Viaja por el tiempo y presencia una serie de acontecimientos misteriosos que llevaron al mayor descubrimiento de la historia de la humanidad.</p><p>Descarga&nbsp;<strong>The House of Da Vinci 2</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y disfruta de la historia.</p><p><strong>The House of Da Vinci 2</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>ROMPECABEZAS MECÁNICOS ORIGINALES</li><li>VIAJES EN EL TIEMPO</li><li>NUEVOS CONTROLES TÁCTILES</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';