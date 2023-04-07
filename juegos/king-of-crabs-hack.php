<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'King of Crabs HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Un enorme mundo en una isla te espera para que lo explores y conquistes. Busca una variedad de armas divertidas y peligrosas que te darán muchas ventajas. Encuentra especies de cangrejos extrañas y maravillosas, actualízalos y personalízalos para que te ayuden a ascender tu rango. Forma un equipo con tus amigos para ayudarse o enfrentarse entre sí, el juego es una combinación de controles táctiles fáciles de usar y un divertido modo de juego.</p><p>Ha sido creado con gráficos 3D, animación y sonido súper detallados que logran que la experiencia cobre vida, lidera la tabla de posiciones para demostrarle a todos que eres el cangrejo más poderoso del lugar.</p><p>Descarga&nbsp;<strong>King of Crabs HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y se el cangrejo mas fuerte en la batalla.</p><p><strong>King of Crabs HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';