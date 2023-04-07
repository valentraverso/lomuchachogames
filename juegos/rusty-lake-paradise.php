<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Rusty Lake Paradise'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Jakob, el hijo mayor de la familia Eilander, vuelve a la isla Paradise tras el fallecimiento de su madre. Tras la muerte de esta, la isla parece estar maldita por las diez plagas. Encuentra las memorias escondidas de la madre de Jakob y participa en extraños rituales familiares para detener las plagas.</p><p>Rusty Lake Paradise es la tercera aventura point-and-click de Rusty Lake, los creadores de la serie Cube Escape, Rusty Lake Hotel y Rusty Lake: Roots.</p><p>Descarga&nbsp;<strong>Rusty Lake Paradise</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y busca la memorias tan necesarias.</p><p><strong>Rusty Lake Paradise</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Fácil de jugar</li><li>Una historia única</li><li>Una experiencia de puzles inolvidable</li><li>Unos gráficos atmosféricos</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';