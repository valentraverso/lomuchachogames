<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Hotstar Premium'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Hotstar viene con dos paquetes de suscripción únicos,&nbsp; <strong>Hotstar VIP</strong> &nbsp;y&nbsp; <strong>Hotstar Premium</strong> . Hotstar VIP te brinda acceso ilimitado a eventos deportivos en vivo, incluidos los partidos de cricket VIVO IPL, la Premier League, la Fórmula 1 y el tenis. También obtienes acceso a las series de Star antes de su estreno en TV, y Hotstar Specials, es decir, contenido original aclamado por la crítica. El plan Hotstar Premium incluye todos los beneficios antes mencionados, además de los últimos programas de televisión estadounidenses y películas de Hollywood de gran éxito.</p><p>Lanzado en 2015, es una de las aplicaciones más descargadas de la India y ha atraído más de 350 millones de descargas gracias a una tecnología de transmisión de video altamente evolucionada y una gran atención a la calidad de la experiencia en todos los dispositivos.</p><p>Descarga&nbsp;<strong>Hotstar Premium MOD</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y disfruta de entretenimiento.</p><p><strong>Hotstar Premium MOD</strong> APK para Android es una gran opcion a la hora de elegir entre apps. Algunas características de este son:</p><ul><li>MOD Premium</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';