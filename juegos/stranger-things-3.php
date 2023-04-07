<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Stranger Things 3'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p><strong>Stranger Things 3</strong> es el juego complemento oficial de la temporada 3 de la exitosa serie original de Netflix, tendras que jugar recreando sucesos conocidos de la serie al tiempo que descubres misiones, interacciones entre personajes y secretos inéditos. Este juego de aventura combina un estilo retro característico con mecánica de juego moderna, diversión nostálgica con un toque fresco. Igual que en la serie, el trabajo en equipo es central para este juegazo.</p><p>Los fans pueden formar un equipo de dos jugadores en modo cooperativo local para explorar el mundo de Hawkins, resolver acertijos y luchar contra los males que salen del mundo del revés representando a uno de los doce personajes de la serie.</p><p>Descarga&nbsp;<strong>Stranger Things 3</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y recrea la famosa serie de la mejor manera posible.</p><p><strong>Stranger Things 3</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>La mejor forma de recrear la serie de Netflix</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';