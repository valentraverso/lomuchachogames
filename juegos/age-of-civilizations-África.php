<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Age of Civilizations África'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Age of Civilizations es un juego de estrategia por turnos en que tu objetivo es dominar al mundo. Las órdenes serán enviadas al finalizar el turno. EL número de órdenes que puedes enviar está limitado por tus puntos de movimiento. Después de que las órdenes sean enviadas, las civilizaciones las ejecutan en orden, que es escogido aleatoriamente.</p><p>La capital es la provincia más importante de tu civilización. Si pierdes tu capital durante 3 turnos,tu civilización desaparecerá. Si capturas la capital de otra civilización, obtendrás todas sus provincias también.</p><p>Descarga&nbsp;<strong>Age of Civilizations África</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y domina Africa.</p>";
$info = "<p><strong>Age of Civilizations África</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Mapa</li><li>Tesoro</li><li>Órdenes - Vista Normal</li></ul>";
$versiondispositivo = "2.3 o +";
$mod = "";
include_once '../templates/game/v1.php';