<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'R-TYPE'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3.3 o +";
$texto = "<p>Vamos a volver en los años 80 con este clásico de la vieja escuela de los shootem up. Uno de los más conocidos juegos de árcade te hará viajar en los días pasados esté preparado para divertirse con este juego de la vieja escuela, despega y ataca el malvado Imperio de Bydo No sea tímido y uso de su mejor tiro para hacerlo caer, es retro, es divertido y también es difícil de dominar, sea el mejor del mundo para terminar esta obra maestra, el juego es el mismo R-Type que han jugado antes. Seguimos todos sus detalles, de la manera que lo recuerdo, vuela a través de 8 niveles con 3 opciones de control diferente, juga en dos niveles de dificultad.&nbsp;</p><p>Actualizado con nuevas armas, power ups y archivos adjuntos. Derrota a los 8 jefes y pelea contra diferentes enemigos.</p><p>Descarga&nbsp;<strong>R-TYPE</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y destruye los objetivos que mas puedas.</p><p><strong>R-TYPE</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>SIENTE LA EXPLOSIÓN</li><li>FUNCIONES ORIGINALES</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';