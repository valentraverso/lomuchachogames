<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Harry Potter: Wizards Unite'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0 o +";
$texto = "<p>Harry Potter: Wizards Unite se trata del próximo juego de mundo real con realidad aumentada (RA) inspirado en el mundo mágico que otorga magia a todos los jugadores del mundo.</p>

<p>Desarrollado y publicado por Niantic, Inc. y WB Games San Francisco, Harry Potter: Wizards Unite es parte de Portkey Games, que se encarga de dar vida a nuevas aventuras en el mundo mágico a través de videojuegos, haciendo que el jugador se sienta protagonista y basándose en las historias originales de J.K. Rowling.</p>

<p>Descargar<strong> Harry Potter: Wizards Unite </strong>apk gratis para Android en LOMUCHACHOgames y se el mejor en el arte de la magia.</p><p>Harry Potter: Wizards Unite para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p>
<ul>
 	<li>CUMPLE TU PAPEL EN EL MUNDO MÁGICO</li>
 	<li>LA MAGIA ESTÁ POR TODAS PARTES</li>
 	<li>LA UNIÓN HACE LA FUERZA</li>
</ul>";
include_once '../templates/game/v1.php';