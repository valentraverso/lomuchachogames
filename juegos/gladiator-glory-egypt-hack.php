<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Gladiator Glory Egypt HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Tu historia comienza en el fondo del Imperio Romano, en la misteriosa y artística escuela de gladiadores de Noctis. Debes recorrer un largo camino lleno de luchas peligrosas e misterios históricos increíbles antes de que el emperador te corone con el laurel del Triunfero y te conceda la libertad deseada.&nbsp;</p><p>Pero es futuro, ahora aprieta tu verdadera espada en la mano y sin miedo mira a los ojos de un rival mortal. Eres un legionario en este juego, un valiente caballero que lucha por la libertad. Tu héroe quiere ganar esta guerra por la gloria. Todos los días él derrama su sangre para divertir a su dueño Noctis.&nbsp;</p><p>Descarga&nbsp;<strong>Gladiator Glory Egypt HACK</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y se el mejor guerrero.</p><p><strong>Gladiator Glory Egypt HACK</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';