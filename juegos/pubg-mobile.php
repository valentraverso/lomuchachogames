<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'PUBG Mobile'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.3 o +";
$texto = "<p>PUBG para Android es de los juegos Battle Royale de los mas reales, donde aproximadamente 100 jugadores se encuentran en una isla, quienes pelean por sobrevivir a las bombas que caen y a las otras personas que se encuentran.</p>

<p>En PLAYERUNKNOWN\'S BATTLEGROUNDS los jugadores tienen que localizar, recoger sus propias armas, vehículos y suministros. Un arsenal letal de armas de fuego en constante crecimiento, armas cuerpo a cuerpo y objetos arrojadizos con trayectorias de viaje realistas que te dan la opción de disparar, golpear o incinerar a tus adversarios.</p>

<p>Descargar <strong>PUBG Mobile</strong> APK + OBB para Android en LOMUCHACHOgames y entra al campo de batalla.</p><p>PUBG Mobile para Android es de los mejores battle Royale del momento descarga el apk + obb en LOMUCHACHOgames, junto a millones de juegos gratis.</p>
<ul>
 	<li>Gráficos de Alta Calidad y Audio HD</li>
 	<li>Armas Realistas</li>
 	<li>Viaja con Estilo</li>
 	<li>Haz Equipo con tus Amigos</li>
 	<li>Ambiente de Juego Justo</li>
</ul>";
include_once '../templates/game/v1.php';