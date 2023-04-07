<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Buff Knight Advanced - Retro RPG Runner'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Buff Knight Advanced es un juego de rol de píxeles en 2D donde el personaje de un jugador está constantemente en movimiento. Mata a los enemigos entrantes con tu espada y hechizos.</p>

<p>Los monstruos más fuertes se interpondrán en el camino a medida que progreses, y eventualmente vencerás al jugador. Colecciona artefactos y mejora tus armas y armaduras para luchar contra ellos y convertirte en el caballero más poderoso de todos los tiempos.</p>

<p>Descarga<strong> Buff Knight Advanced - Retro RPG Runner </strong>apk gratis en LOMUCHACHOgames y elimina a los monstruos con los mejores poderes.</p><p>Lo que trae Buff Knight Advanced - Retro RPG Runner gratis:</p>
<ul>
 	<li>Artículos especiales</li>
</ul>";
include_once '../templates/game/v1.php';