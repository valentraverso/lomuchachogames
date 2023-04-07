<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'LEGO® Marvel™ Super Heroes HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>Universo en peligro contiene una historia original que atraviesa todo el Universo Marvel.</p>

<p>Los jugadores controlan a Iron Man, Spiderman, Hulk, Capitán América, Lobezno y muchos otros personajes de Marvel al momento de unirse para detener a Loki y a una hueste de otros villanos de Marvel y evitar que ensamblen una súper-arma capaz de destruir al mundo.</p>

<p>Descargar <strong>LEGO® Marvel™ Super Heroes HACK </strong>apk + obb gratis para Android en LOMUCHACHOgames y que la fuerza de los superheroes te acompañe.</p><p>LEGO® Marvel™ Super Heroes HACK para Android es una gran opcion a la hora de elegir ente juegos de aventura. Algunas características de este son:>/p>
<ul>
 	<li>MOD del juego</li>
</ul>";
include_once '../templates/game/v1.php';