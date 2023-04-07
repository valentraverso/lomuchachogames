<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Prizefighters HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Prizefighters Es El Nuevo Y Mejor Free Arcade Boxing.</p>
<p>Juego Para Chocar El Playstore presentando Un fondo Carera, Tiempo real multijugador, Progession De Jugador Y Personalidasion, y rapida Action Gameplay Con Intuivo Controles De pelea.</p>
<p>Descargar<strong> Prizefighters HACK </strong>apk gratis para Android en LOMUCHACHOgames y golpea fuerte.</p>
 <p>Prizefighters HACK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p>
<ul>
 	<li>Dinero Ilimitado</li>
</ul>";
include_once '../templates/game/v1.php';