<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Rally Fury - Extreme Racing'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Experimenta carreras a toda velocidad en Rally Fury y lleva tus habilidades de conducción al límite mientras compites contra el reloj, compite contra oponentes desafiantes de la IA y compite en eventos especiales.</p>

<p>Este es un genial juego de carreras para Android donde deberas montarte a tu auto y ser el mas rapido.</p>

<p>Descarga <strong>Rally Fury - Extreme Racing </strong>app para Android en LOMUCHACHOgames.</p><p>Rally Fury tiene la siguientes caracteristicas que te llevaran al siguiente nivel en las competiciones de automoviles.</p>
<ul>
 	<li>Drift</li>
 	<li>Nitro Boost</li>
 	<li>Fisicas realistas</li>
 	<li>Millones de autos</li>
</ul>";
include_once '../templates/game/v1.php';