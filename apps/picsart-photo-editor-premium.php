<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'PicsArt Photo Editor Premium'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "7.0 o +";
$texto = "<p>PicsArt es tu editor de fotos y video todo-en-uno en tu móvil. Accede a impresionantes efectos para fotos, herramientas de dibujo, editor de imágenes, creador de collages, creador de stickers, cámara, filtros para fotos, editor de video, biblioteca de imágenes gratis, editor para rostro con intercambio de rostro, herramientas para embellecer, y más.&nbsp;</p><p>Despierta tu creatividad con PicsArt, la aplicación más descargada en el puesto 14 en todo el mundo en 2019 con más de 700 millones de descargas hasta la fecha. Comienza con tu foto o una de nuestra comunidad y dale un corte, un recorte o cuadrícula.</p><p>Descarga&nbsp;<strong>PicsArt Photo Editor Premium</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y edita sin fin.</p><p><strong>PicsArt Photo Editor Premium</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD Premium</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';