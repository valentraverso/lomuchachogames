<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'BitLife HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Tratarás de tomar todas las decisiones correctas en un intento de convertirte en un ciudadano modelo en algún momento antes de que mueras. Podrías casarte con el amor de tu vida, tener hijos y obtener una buena educación en el camino. O jugarás elecciones que horroricen a tus padres. Podrías descender a una vida delictiva, enamorarte o aventurarte, iniciar disturbios en la prisión, contrabandear bolsas de contrabando y engañar a tu cónyuge. Tu eliges tu historia.</p><p>Descubra cómo las opciones de vida poco a poco se pueden sumar para determinar su éxito en la vida del juego, los juegos de cuentos interactivos han existido por años. Pero este es el primer simulador de vida de texto que verdaderamente combina y simula la vida adulta.</p><p>Descarga&nbsp;<strong>BitLife HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y vive una vida que puedas recordar.</p><p><strong>BitLife HACK </strong>APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';