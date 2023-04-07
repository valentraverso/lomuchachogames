<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'City Island 5'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>City Island 5 es el juego de crear ciudades para Android donde deberas construir tu propia ciudad en una isla rodeada de un gigante oceano. Conviertete en el alcalde de una ciudad costera y llevala a su esplendor.</p>

<p>En la mayoría de los juegos de construcción de ciudades, solo administras una ciudad, pero en City Island 5 - Offline Tycoon Building Sim Game” expandirás tus horizontes a nuevas islas, cada una con un tema y superficie diferentes para construir una ciudad.</p>

<p>Descargar City Island 5 apk gratis para Android en LOMUCHACHOgames y se el mejor alcalde del mundo.</p>


<p>CIty Island 5 apk es muy divertido y si usas una buena estrategia vas a llevar a la ciudad a ser una de las mas grandes. Este juego posee las siguientes características:</p>
<ul>
 	<li>De un pueblo, a una ciudad, a una metrópolis</li>
 	<li>Construcción de ciudades con un objetivo, con un propósito</li>
 	<li>¡Colecciona, mejora, decora, explora en este juego completo de simulación de construcción!</li>
 	<li>¡Recoge recompensas y gana cofres del tesoro!</li>
 	<li>Juega en línea o fuera de línea. No se requiere conexión a Internet para jugar</li>
 	<li>¡Los juegos de construcción de ciudades más divertidos con docenas de islas geniales para construir tu ciudad!</li>
</ul>";
include_once '../templates/game/v1.php';