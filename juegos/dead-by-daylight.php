<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Dead by Daylight'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "7.0 o +";
$texto = "<p>Dead by Daylight es la adaptación para dispositivos Android de uno de los grandes referentes de los juegos de terror multijugador. Al igual que en la versión para PC y consolas de sobremesa, cuatro supervivientes tendrán que intentar huir de un asesino con poderes sobrenaturales, que intentará hacer lo posible por acabar con todos ellos. Y por supuesto, tanto los supervivientes como el asesino estarán controlados por jugadores.</p><p>Dead by Daylight es una buena adaptación de uno de los juego de terror asimétricos más populares del mundo.</p><p>Descarga&nbsp;<strong>Dead by Daylight</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y trata de no asustarte.</p><p><strong>Dead by Daylight</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Buena adaptación.</li><li>Juego de terror asimétricos.</li><li>Buen apartado gráfico.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';