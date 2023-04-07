<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Evoland HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Según progresas a lo largo del juego, irás desbloqueando nuevas tecnologías, sistemas de juego y gráficos cada vez mejores. Partiendo de gráficos monocromáticos y batallas por turnos hasta librar combates contra enemigos finales a tiempo real con gráficos totalmente en 3D, vive con Evoland la evolución de los juegos de aventuras en una experiencia llena de humor y guiños a momentos míticos de juegos clásicos.</p><p>Diviértete con mazmorras, rompecabezas, montones de secretos por desvelar y cientos de logros y estrellas para coleccionar.</p><p>Descarga&nbsp;<strong>Evoland HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y disfruta de este juegazo.</p><p><strong>Evoland HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';