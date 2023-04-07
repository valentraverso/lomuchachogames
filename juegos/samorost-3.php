<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Samorost 3'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Samorost 3 es un juego de exploración, aventura y puzles de los galardonados creadores de Machinarium y Botanicula. Es el proyecto más ambicioso de Amanita Design hasta la fecha y la continuación independiente de los exitosos juegos indie Samorost y Samorost 2.</p><p>En Samorost 3 seguirás a un peculiar gnomo espacial que usa los poderes de una flauta mágica para viajar a través del cosmos en busca de los misteriosos orígenes del instrumento. Visita nueve mundos alienígenas únicos donde te aguardan multitud de coloridos desafíos, criaturas y sorpresas, que cobran vida gracias a la belleza del trabajo artístico, el sonido y la música.</p><p>Descarga&nbsp;<strong>Samorost 3</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y disfruta esta nueva entrega de este juegazo.</p><p><strong>Samorost 3</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Flauta mágica</li><li>Mundos alienígenas</li><li>La música es increíble</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';