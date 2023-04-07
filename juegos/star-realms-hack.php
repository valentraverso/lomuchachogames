<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Star Realms HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p><strong>Star Realms HACK</strong> combina adictivo juego de construcción de mazos jugar con emocionantes combates estilo del juego de cartas.</p><p>Diseñado por Magia Salón de la Fama Darwin Kastle y Rob Dougherty (de la construcción de mazos Ascension Deckbuilding Game), increíblemente rica y fácil de aprender el juego de estrellas Realms 'proporcionará horas y horas de entretenimiento.</p><p>Ademas es un adictivo juego de construcción de mazos con combate jugador contra jugador, tiene tutorial que te enseña a jugar en minutos, impresionantes efectos visuales, jugar VS la AI y 6 modo campaña misión.</p><p>Descarga&nbsp;<strong>Star Realms HACK</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y ganales a todos.</p><p><strong>Star Realms HACK</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Desbloqueo MOD</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';