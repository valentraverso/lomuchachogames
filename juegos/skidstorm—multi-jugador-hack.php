<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'SkidStorm—Multi-jugador HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>SkidStorm es un juego gratis de velocidad en línea en modo multijugador, cuyas pantallas son sencillas, donde los jugadores pueden jugar tanto juntos como a solas, que cuenta con la jugabilidad de deriva y un manejo fácil.</p>

<p>Trata de ganar a tus contincantes con tactica, trucos,vueltas rapidas, y siempre usando la mentalidad ganadora de un buen corredor de carreras profesional.</p>

<p>Descarga <strong>SkidStorm—Multi-jugador HACK </strong>apk gratis en LOMUCHACHOgames y maneja como el mejor.</p><p>Lo que trae SkidStorm—Multi-jugador HACK apk para android:</p>
<ul>
 	<li>Dinero Ilimitado</li>
</ul>";
include_once '../templates/game/v1.php';