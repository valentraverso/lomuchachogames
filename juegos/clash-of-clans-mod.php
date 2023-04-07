<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Clash of Clans MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Construye tu aldea, crea un clan y compite en las épicas guerras de clanes junto a millones de jugadores.&nbsp;</p><p>Te esperan bárbaros con bigotes impecables, magos con ardientes bolas de fuego y otras increíbles tropas.&nbsp;</p><p>Descarga&nbsp;<strong>Clash of Clans MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y descubre el mundo de Clash&nbsp;of&nbsp;Clans.</p>";
$info = "<p><strong>Clash of Clans MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';