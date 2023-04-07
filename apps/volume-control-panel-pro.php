<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Volume Control Panel Pro'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "6.0 o +";
$texto = "<p>Un panel de control de volumen inspirado en Android 9/10. Anular teclas de volumen, deslizador flotante deslizante arriba / abajo opcional, abierto desde el lanzador u otras aplicaciones, elija Media o Ring como la respuesta de botón predeterminada, comienza contraído o expandido, modo zurdo o diestro, zurdo o diestro en el paisaje.&nbsp;</p><p>Posición vertical personalizada, tiempo de espera del panel personalizado, ocultar el panel de volumen de la alarma.</p><p>Descarga&nbsp;<strong>Volume Control Panel Pro</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y controla el volumen a tu manera.</p><p><strong>Volume Control Panel Pro</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Botones de intercambio / inversión.</li><li>Forzar diálogo de cierre del sistema.</li><li>Fondo personalizado, control deslizante y colores de iconos.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';