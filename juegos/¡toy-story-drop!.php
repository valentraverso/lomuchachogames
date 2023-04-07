<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = '¡Toy Story Drop!'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0 o +";
$texto = "<p>El mundo de Disney•Pixar y Toy Story viene a la vida en el único juego móvil que está completamente ambientado en el universo de Toy Story, incluyendo el próximo Toy Story 4</p>

<p>Ayuda a Woody, Buzz y queridos personajes, clásicos y nuevos, a desbloquear sus historias, una escena a la vez, mientras te aventuras a través de lugares icónicos, como la Habitación de Andy, Pizza Planeta y mucho más.</p>

<p>Descargar<strong> ¡Toy Story Drop! </strong>apk gratis para Android en LOMUCHACHOgames y se el mejor amigo fiel.</p><p>¡Toy Story Drop! para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p>
<ul>
 	<li>Explora lugares icónicos</li>
 	<li>Llama a los juguetes a tu ayuda</li>
 	<li>Toca y descubre divertidas referencias</li>
</ul>";
include_once '../templates/game/v1.php';