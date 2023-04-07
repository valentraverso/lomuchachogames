<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'NBA JAM'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>Haz mates con tus estrellas favoritas de los 30 equipos de la NBA en el arcade de baloncesto 2 contra 2 que tan bien recuerdas... pero como nunca antes lo has visto, NBA JAM es un juego enorme (más de 300 MB), así que te recomendamos encarecidamente que te conectes a través de Wi-Fi antes de descargar. Te aseguramos que merece la pena esperar por este Jam.</p><p>Si eres de la vieja escuela, sentirás la nostalgia de la década de los años noventa cuando juegues el nuevo arcade deportivo disponible en Google Play. Incluye la voz de Tim Kitzrow (el narrador original de NBA JAM), con todas sus frases clásicas y algunas nuevas. Este JAM es \"boomshakalaka\" y mucho más.</p><p>Descarga&nbsp;<strong>NBA JAM</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y boomshakalaka!</p><p><strong>NBA JAM</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>JUEGA RÁPIDO, CLÁSICO O CARA A CARA CONTRA UN AMIGO</li><li>MANTENTE CONECTADO</li><li>JUEGA EN TU ANDROID TV</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';