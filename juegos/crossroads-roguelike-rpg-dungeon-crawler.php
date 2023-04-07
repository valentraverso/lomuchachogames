<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Crossroads: Roguelike RPG Dungeon Crawler'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Este es un juego en el que eres un agente del Gremio de aventureros en una misión. Generación de procedimiento de cada piso: nunca se sabe lo que hay debajo de la siguiente tarjeta.&nbsp;</p><p>Decenas de enemigos, trampas y efectos de terreno únicos. Un rico arsenal de equipos, poderosos artefactos y hechizos. Santuarios de dioses y eventos aleatorios, que permiten decidir los destinos mediante la tirada de dados.</p><p>Descarga&nbsp;<strong>Crossroads: Roguelike RPG Dungeon Crawler</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y se el mejor agente.</p><p><strong>Crossroads: Roguelike RPG Dungeon Crawler</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Crea un personaje propio. Poderoso guerrero orco que adora a la diosa de la guerra? ¿O tal vez el pícaro ágil que cree solo en bolsas de oro.&nbsp;</li><li>6 clases jugables: desde guerreros y magos clásicos hasta más opciones inesperadas.&nbsp;</li><li>5 aventuras que requieren diferentes enfoques para triunfar.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';