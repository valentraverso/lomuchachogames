<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'To the Moon'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>La historia de \"To the Moon\" se presenta a los jugadores de forma muy parecida a una película. A pesar de que el juego completo no tiene un sistema de batalla y puede completarse en unas pocas horas, la atrapante historia y la emotiva banda sonora original se hacen eco entre los jugadores de todo el mundo. Además de recibir calificaciones contundentemente positivas, \"To the Moon\" recibió varios premios de Gamespot, Metacritic, WIRED y muchos más, y estuvo nominado al premio \"I'm Not Crying, There's Something In My Eye\" en los \"2016 Steam Awards\".</p><p>\"To the Moon\", un juego de rol (RPG) basado en una historia con gráficos de píxeles, fue desarrollado originalmente hace 6 años para la plataforma de PC por el realizador canadiense Kan Gao y Freebird Games, su estudio de videojuegos independiente. X.D. Network Inc adquirió los derechos para desarrollar y publicar la versión móvil remasterizada de \"To the Moon\".</p><p>Descarga&nbsp;<strong>To the Moon</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y disfruta de la historia.</p><p><strong>To the Moon</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Una experiencia única y sin combate basada en historias.</li><li>Mezcla innovadora entre elementos de juegos de aventura y estética clásica de juegos de rol.</li><li>Aclamada banda sonora original que se vincula estrechamente con la historia.</li><li>Una ejecución de espresso con relleno cero y sin desagües.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';