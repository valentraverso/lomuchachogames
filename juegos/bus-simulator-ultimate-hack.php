<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Bus Simulator Ultimate HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Rutas completamente realistas y la experiencia de conducir en autobús te están esperando. En los paises mas conocidos y grandes del mundo como Estados Unidos, Alemania, Rusia, Turquía, Italia, España, Francia, Países Bajos, Brasil, Azerbaiyán y los mejores mapas de ciudades realistas.</p><p>Establezca su compañía de autobuses y conviértase en la corporación de autobuses más grande del mundo. Acuerdate de todas las condiciones que necesiten los pasajeros y tratalos muy bien para mejorar el rendimiento en la ruta.</p><p>Descarga&nbsp;<strong>Bus Simulator Ultimate HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y recorre las mejores rutas del mundo con tu grandiosa empresa de viajes.</p><p><strong>Bus Simulator Ultimate HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';