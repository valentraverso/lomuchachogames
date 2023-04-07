<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Witcheye HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Witcheye es una gran aventura colorista de plataformas de la vieja escuela con un sistema de control único a través de la pantalla táctil, lo que ofrece un control sin igual sobre el personaje protagonista. Desliza para moverte y toca para detenerte, rebota en los enemigos y esquiva los peligros en seis mundos vibrantes.&nbsp;</p><p>Embárcate en una aventura manejando a una apacible bruja que se transforma en un globo ocular volador en busca de venganza después de que un caballero lisonjero y un mago le roben los ingredientes de sus hechizos.</p><p>Descarga&nbsp;<strong>Witcheye HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y descubre esta aventura fantástica.</p><p><strong>Witcheye HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';