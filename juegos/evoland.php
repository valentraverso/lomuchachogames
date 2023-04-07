<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Evoland'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Según progresas a lo largo del juego, irás desbloqueando nuevas tecnologías, sistemas de juego y gráficos cada vez mejores. Partiendo de gráficos monocromáticos y batallas por turnos hasta librar combates contra enemigos finales a tiempo real con gráficos totalmente en 3D, vive con Evoland la evolución de los juegos de aventuras en una experiencia llena de humor y guiños a momentos míticos de juegos clásicos.</p><p>Diviértete con mazmorras, rompecabezas, montones de secretos por desvelar y cientos de logros y estrellas para coleccionar.</p><p>Descarga&nbsp;<strong>Evoland</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y disfruta de este juegazo.</p><p><strong>Evoland</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Recorre la historia de los videojuegos de acción y aventuras a lo largo de la trama.</li><li>Descubre montones de evoluciones, desde las aventuras de acción retro en 2D hasta las batallas activas y la acción totalmente en 3D.</li><li>Vuelve a visitar la zona inicial totalmente renderizada en 3D o explora el mundo de las alturas con tu propio avión.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';