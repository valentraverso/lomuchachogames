<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'True Skate HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>SE BUSCA: al próximo Tony Hawk. Tal cual. Con True Skate, de True Axis, la simulación de skateboarding te permitirá hacer todos los ollies y kickflips que quieras desde la comodidad de tu cama o sofá sin que tengas que emprender la aventura de desplazarte hasta un skatepark.</p><p>La parte más importante del juego es entretenerse jugando con el monopatín, pero mientras tanto, el juego tiene algunas tareas divertidas, como aprender una acción, rastrear otro monopatín frente a ti y relajarse. El juego comenzó con una buena guía para principiantes, en el juego unos minutos más tarde, el jugador sabrá cómo jugar este juego. Sin embargo, si quieres jugar al skate, es posible que tengas que esforzarte un poco. Después de eso, úsalo para matar el tiempo y entrenar constantemente tus habilidades para convertirte en un patinador.</p><p>Descargar <strong>True Skate HACK </strong>gratis para Android full APK en español en LOMUCHACHOgames.</p><p>Características del juego de skates para Android:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';