<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'SIMS 3'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>¡La libertad de Los Sims 3 te inspirará con infinitas posibilidades creativas y te divertirá con momentos inesperados de sorpresa y travesura! Crea más de un millón de Sims únicos y controla sus vidas.&nbsp;</p><p>Personaliza todo, desde sus apariencias, hasta sus personalidades e incluso la casa de sus sueños.&nbsp;</p><p>Luego, envía a tus Sims a explorar nuevas ubicaciones en la ciudad y conocer a otros Sims en el vecindario.</p><p>Mas sobre SIMS 3:</p><ul><li>Crea tu personaje de tus sueños</li><li>Vive la vida como mas te guste</li><li>Haz todo lo que quieras en este mundo ilimitado</li></ul>";
include_once '../templates/game/v1.php';