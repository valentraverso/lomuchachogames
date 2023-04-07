<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'MarineTraffic HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p><strong>Marine Traffic</strong> exhibe las posiciones en tiempo real de los barcos y yates de todo el mundo. Conectada a la red más grande de receptores AIS, la aplicación cubre la mayoría de los principales puertos y rutas de navegación.</p><p>Busque buques, embarcaciones y puertos marítimos y vea qué hay cerca de usted, también vea el viento actual y pronósticos de viento de 48 horas en mapa, examine 1,5 millones de fotos de los barcos, puertos y faros y mucho más.</p><p>Descarga&nbsp;<strong>MarineTraffic HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y fijate todos los movimientos marinos.</p><p><strong>MarineTraffic HACK</strong> APK para Android es una gran opción a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>EMBARCACIONES EN EL MAPA EN VIVO</li><li>EMBARCACIONES POR DÍA</li><li>ANIMADA y Llegadas y Salidas PORTUARIAS</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';