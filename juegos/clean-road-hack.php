<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Clean Road HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Toca y arrastra para controlar el quitanieves, evita los obstáculos y ayuda a las personas a salir de sus hogares, mejora tu vehículo para enfrentarte incluso a la tormenta de nieve más poderosa.</p><p>Ayuda a las personas a salir de sus hogares quitando la gran cantidad de nieve que obstaculiza sus garajes. En este divertido juego tendrás la oportunidad de conducir un vehículo quitanieves y abrir un camino para que otros coches puedan transitar. Pero no todo es tan fácil, te encontrarás con obstáculos que tendrás que superar para seguir el recorrido. No importa si tu dispositivo móvil es Android o iOS, tienes disponible Clean Road en las dos plataformas completamente gratis.</p><p>Mientras mejor conduzcas, mayor cantidad de garajes podrás limpiar y así tendrás la posibilidad de superar más niveles y acumular más puntos.</p><p>Descarga&nbsp;<strong>Clean Road HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y quita la nieve.</p><p><strong>Clean Road HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';