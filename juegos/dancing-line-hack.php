<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Dancing Line HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Dancing Line combina una jugabilidad trepidante con una banda sonora elegida minuciosamente para crear una experiencia inigualable. Existen varios mundos que van aumentando de dificultad y cada uno de ellos presenta un entorno único y evoca diferentes emociones.&nbsp;</p><p>La clave no está solo en evitar los obstáculos y las trampas, sino también en jugar con la música. Escucha el ritmo y la melodía y verás como en muy poco tiempo empiezas a mejorar.</p><p>Descarga&nbsp;<strong>Dancing Line HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y pasa todos los nivele musicales.</p><p><strong>Dancing Line HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';