<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'GRID Autosport'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Arranca tu carrera como piloto profesional de la alta velocidad con el éxito triple A de Codemasters diseñado para proporcionar una mezcla irresistible entre simulación y conducción arcade.</p><p>Compite en un montón de carreras de alto rendimiento sobre una gran variedad de pistas, rutas, recorridos y circuitos. Cambia entre controles intuitivos personalizables: Inclinación, volante táctil, flecha táctil o mando. Descarga coches y circuitos adicionales de manera absolutamente gratuita.</p><p>Descarga&nbsp;<strong>GRID Autosport</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y se el mejor en las pistas.</p><p><strong>GRID Autosport</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>100 COCHES Y 100 CIRCUITOS</li><li>CONTROLES PERSONALIZABLES</li><li>DIFICULTAD ESCALONADA</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';