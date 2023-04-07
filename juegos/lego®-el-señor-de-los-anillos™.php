<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'LEGO® El Señor de los Anillos™'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>Concebidas con el humor y la interminable variedad de la experiencia de juego LEGO, sigue las líneas de la Trilogía del Señor de los Anillos original. Revive la leyenda de la Comunidad del Anillo, las dos Torres, y el regreso del Rey por medio de minifiguras LEGO, mientras exploran maravillas y resuelven adivinanzas.</p>

<p>Los orcos y algunas cosas repugnantes te esperan en este camino arriesgado hacia el Monte del Destino, aunque, una comunidad será formada en este recorrido: el guerrero Aragorn, el mago Gandalf, el elfo Legolas, el enano Gimli, el Hombre de Gondor, Boromir, y los amigos de Frodo el hobbit, Sam, Merry y Pippin, todos se unirán a lo largo de la misión para destruir el Anillo y regresar la paz a la tierra.</p>

<p>Descargar <strong>LEGO® El Señor de los Anillos™ </strong>apk + obb gratis para Android en LOMUCHACHOgames y salava ala tierra.</p><p>LEGO® El Señor de los Anillos™ para Android es una gran opcion a la hora de elegir ente juegos de aventura. Algunas características de este son:</p>
<ul>
 	<li>EL ÚNICO ANILLO</li>
 	<li>MINIFIGURAS PARLANTES</li>
 	<li>EXPLORACIÓN</li>
</ul>";
include_once '../templates/game/v1.php';