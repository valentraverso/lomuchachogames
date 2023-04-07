<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Old School RuneScape HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Old School RuneScape es RuneScape como solías saberlo. Se lanzó por primera vez en 2013 y se basa en RuneScape como lo era en 2007. Es el único MMORPG en el mundo que está formado por sus jugadores, con los desarrolladores lanzando contenido nuevo y regular que ha sido votado por los fanáticos, el MMORPG más grande y popular del mundo, Old School RuneScape, ha sido jugado por más de 260 millones de jugadores desde el lanzamiento en 2001 de RuneScape.</p><p>Old School RuneScape une la intrincada mecánica de los MMO modernos con el juego nostálgico de apuntar y hacer clic de los primeros juegos de rol.</p><p>Descarga&nbsp;<strong>Old School RuneScape HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y supera los obstáculos.</p><p><strong>Old School RuneScape HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';