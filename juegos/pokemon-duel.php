<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Pokemon Duel'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Pokémon Duel (en Japón conocido como Pokémon Comaster), es un videojuego oficial ambientado en el universo Pokémon.&nbsp;</p><p>En este caso, el juego se centra en la superación de enfrentamientos contra otros jugadores en una suerte de juego de mesa donde los monstruos de bolsillo son las piezas del tablero.</p><p>Descarga&nbsp;<strong>Pokemon Duel</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y revive a los Pokemones.</p>";
$info = "<p><strong>Pokemon Duel</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Batalla Real</li></ul>";
$versiondispositivo = "5.0.o +";
$mod = "";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';