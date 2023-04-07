<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = ''";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Infinity Run está calificado como uno de los juegos más adictivos en la categoría de juegos de música jugados con varios tipos de balón, que van desde colores hasta formas. Este juego usa pendientes como su juego de carrera de balón para que jugadores se apresuren. Con el objetivo de traer las mejores experiencias para los jugadores en términos del campeonato mundial de fútbol que está sucediendo este año, el juego acaba de actualizarse con un nuevo fondo de fútbol, junto con 2 nuevas canciones de lucha de fútbol y 3 nuevas formas de balón.</p><p>Descarga <strong>Infinity Run: Rush Balls On Rhythm Roller Coaster HACK&nbsp;</strong>apk en LOMUCHACHOgames y disfruta de la musica.</p><p>Lo que trae Infinity Run: Rush Balls On Rhythm Roller Coaster HACK:</p><ul><li>Gemas Ilimitado</li></ul>";
include_once '../templates/game/v1.php';