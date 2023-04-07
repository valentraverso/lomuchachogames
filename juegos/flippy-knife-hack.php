<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Flippy Knife HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>En <strong>Flippy Knife HACK</strong> aprende a tirar cuchillos como todo un profesional para hacer combos fantásticos y nunca fallar. Vuélvete un verdadero amo de 7 lugares diferentes y consigue una increíble colección de cuchillos, espadas, hachas y leyendas de fantasía famosos, tira cuchillos, lanza hachas y arroja espadas legendarias. Vuélvete un maestro al tiempo que diseñas tu propia colección de cuchillos.</p><p>Es un juego para quienes adoran los cuchillos y las emociones. Es un juego para los fuertes y confiados. Ponte al filo del cuchillo, asume riesgos y dales a los blancos. Escoge un cuchillo y clávalo en el blanco. Hazlo en <strong>Flippy Knife HACK</strong> asesta en el metro o en una fila para un partido, en una cafetería o parque, en una escuela o en el trabajo.</p><p>Descarga&nbsp;<strong>Flippy Knife HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y dale al blanco.</p><p><strong>Flippy Knife HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';