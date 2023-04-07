<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Minecraft Story Mode HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>Explora mundos generados al azar y construye cosas increíbles, desde la más humilde de las casas hasta el más majestuoso de los castillos. Juega en el modo creativo con recursos ilimitados o extrae en las profundidades del mundo, crea armas y armaduras para defenderte de enemigos peligrosos en el modo supervivencia.</p>

<p>Crea tu casa y vivi una vida feliz con tu gato y perro, ademas podes jugar con tus amigos y compartir tu mapa para darle la mayor diversion al juego.</p>

<p>Descarga <strong>Minecraft Story Mode HACK </strong>para Android gratis y no pares de crear lo que imaginas.</p><p>MInecraft apk es uno de los juegos mas adictivos que hay, ¿que estas esperando para descargarlo?. Mas cosas sobre Minecraft Story Mode HACK full apk:</p>
<ul>
 	<li>MOD del juego</li>
</ul>";
include_once '../templates/game/v1.php';