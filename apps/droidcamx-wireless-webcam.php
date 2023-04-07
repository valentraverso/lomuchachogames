<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'DroidCamX Wireless Webcam'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>DroidCam convierte su dispositivo Android en una cámara web inalámbrica. Chatee en Skype o úselo con otros programas como OBS y XSplit para sus transmisiones en vivo a Twitch / Youtube.&nbsp;</p><p>También puede usar DroidCam como una cámara web IP prácticamente en todas las redes que utilizan un navegador de Internet.</p><p>Descarga&nbsp;<strong>DroidCamX Wireless Webcam</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y disfruta de las videollamadas.</p><p><strong>DroidCamX Wireless Webcam</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Chatee usando DroidCam Webcam en su computadora, incluyendo sonido e imagen.</li><li>Conéctese a través de Wifi o cable USB.</li><li>Video de 720p en modo HD.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';