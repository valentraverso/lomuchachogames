<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Pokémon Shuffle Mobile MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Pokémon Shuffle Mobile es un juego de rompecabezas en el que tendrás que alinear tres o más Pokémon en vertical u horizontal para combatir contra Pokémon salvajes.&nbsp;</p><p>Puedes jugar ocasionalmente... pero si lo tuyo es combatir, coleccionar Pokémon y subirlos de nivel, este juego te proporcionará horas y horas de diversión.</p><p>Descarga&nbsp;<strong>Pokémon Shuffle Mobile MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y deduce a los Pokemones.</p>";
$info = "<p><strong>Pokémon Shuffle Mobile MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';