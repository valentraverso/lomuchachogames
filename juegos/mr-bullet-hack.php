<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Mr Bullet HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Estás listo para convertirte en héroe, espía y leyenda. Resuelve desafíos desconcertantes, muestra tu precisión mortal y apunta a los enemigos. Ven a experimentar el fenómeno de tiro.&nbsp;</p><p>Usa tu cerebro en este juego de rompecabezas único. ¡Necesitarás un objetivo preciso y un enfoque láser para derrotar a los enemigos, ninjas y muchos otros tipos malos que encontrarás en el mundo! Viaja a nuevas tierras, salva rehenes y usa armas únicas como lanzagranadas para combatir a tus enemigos.</p><p>Descarga&nbsp;<strong>Mr Bullet HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y acaba con todos.</p><p><strong>Mr Bullet HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero Infinito</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';