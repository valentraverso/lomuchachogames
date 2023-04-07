<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Alien: Blackout'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.3 o +";
$texto = "<p>Sumérgete en este terrorífico juego para Android llamado Alien Blackout. Recorre una nave espacial donde un alienigena estará esperando para atraparte y matarte de horripilantes formas. Supera en astucia al depredador perfecto tomando decisiones al límite.</p>
<p>Los jugadores tienen que confiar en los controles dañados de la estación espacial o arriesgarse a sacrificar tripulantes para evitar el fatal contacto con el alien, lo que modificará de forma permanente el desenlace de la partida. Sobrevive a todos los niveles que este juego de aliens te da para jugar y burlate en la cara de este extraterrestre de otra galaxia.</p>
<p>Descarga <strong>Alien: Blackout</strong> para Android gratis apk + obb en LOMUCHACHOgames y metete en la nave alienigena mas aterradora de la historia.</p><p>Mas cosas acerca de Alien Blackout para Android gratis:</p>
<ul>
<li>Sobrevive o muere</li>
<li>Un nuevo episodio de la franquicia alien</li>
<li>Encuentro constante con el miedo</li>
</ul>";
include_once '../templates/game/v1.php';