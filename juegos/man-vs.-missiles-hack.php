<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Man Vs. Missiles HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Vuela tu avión y evita los misiles entrantes todo el tiempo que puedas, descarga el juego si decides aceptar este desafío de Man Vs. Misiles.&nbsp;</p><p>Usa tus dedos para controlar el avión con el joystick en pantalla, recolecta monedas y úsalas en la tienda para comprar nuevos aviones y mejoras, recoge potenciadores como Shield, Boost, Shockwave, etc. para ayudar a destruir y evadir estos misiles.</p><p>Descarga&nbsp;<strong>Man Vs. Missiles HACK</strong>&nbsp;apk ultima versión&nbsp;en LOMUCHACHOgames y esquiva los misiles</p><p><strong>Man Vs. Missiles HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';