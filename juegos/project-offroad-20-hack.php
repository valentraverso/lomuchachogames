<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'PROJECT OFFROAD 20 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "7.0 o +";
$texto = "<p>Se desarrolla en base a la realidad. Gráficos fascinantes y física realista te esperan para que explores. Desarrollamos física todoterreno realista para ofrecerle una experiencia de juego divertida.&nbsp;</p><p>Diseñamos mapas para enriquecer tu experiencia todoterreno. También creamos tareas en los mapas para que tengas que diviertas mientras llegas al siguiente nivel.</p><p>Descarga&nbsp;<strong>PROJECT OFFROAD 20 HACK</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y mejora tu coche.</p><p><strong>PROJECT OFFROAD 20 HACK</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';