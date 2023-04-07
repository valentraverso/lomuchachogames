<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Age of Civilizations Europa'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>Age of Civilizations Europa es un juego de estrategia por turnos en que tu objetivo es dominar al mundo. Las órdenes serán enviadas al finalizar el turno. EL número de órdenes que puedes enviar está limitado por tus puntos de movimiento.</p><p>Después de que las órdenes sean enviadas, las civilizaciones las ejecutan en orden, que es escogido aleatoriamente. La capital es la provincia más importante de tu civilización. Si pierdes tu capital durante 3 turnos,tu civilización desaparecerá. Si capturas la capital de otra civilización, obtendrás todas sus provincias también.</p><p>Descarga&nbsp;<strong>Age of Civilizations Europa</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y conquista Europa.</p><p><strong>Age of Civilizations Europa</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Mapa</li><li>Tesoro</li><li>Órdenes - Vista Normal</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';