<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'VirtualDJ Remote'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Si usted desea utilizar su tableta como un tocadiscos cero virtual, o simplemente quiere alejarse de la cabina por un momento, pero aún continúa vigilando la mezcla de su teléfono, o incluso quieren mezclar todo el concierto de forma inalámbrica desde su tableta mientras que el conectado a su sistema de sonido del ordenador ofrece las pulsaciones, la aplicación remota VirtualDJ le da plena libertad para operar VirtualDJ través de una conexión WiFi.</p><p>Esta aplicación necesita para conectar con el software VirtualDJ se ejecuta en un ordenador PC o Mac.</p><p>Descarga&nbsp;<strong>VirtualDJ Remote</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y se el mejor DJ del condado.</p><p><strong>VirtualDJ Remote</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>FÁCIL CONFIGURACIÓN DE AUDIO</li><li>APOYAR EL PODER TOTAL DE VIRTUALDJ</li><li>MÁXIMA FLEXIBILIDAD</li><li>USTED PUEDE HACER MÁS</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';