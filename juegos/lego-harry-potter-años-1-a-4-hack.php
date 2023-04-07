<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'LEGO Harry Potter: años 1 a 4 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>Juega siendo Harry, Ron, Hermione o muchos otros a medida que exploras Hogwarts y te sumerges en incontables horas de juego a través de más de 40 niveles basados en los libros y películas de Harry Potter.</p>

<p>LEGO Harry Potter: años 1 a 4 gira en torno a los cuatro primeros libros y películas de Harry Potter y parte de la base de anteriores videojuegos de LEGO® para ofrecer una mezcla de diversión, juego accesible y humor desenfadado que atrae a todas las edades. Los jugadores pueden explorar el mundo de la magia y sentirse como si estuvieran en Hogwarts.</p>

<p>Descargar<strong> LEGO Harry Potter: años 1 a 4 HACK </strong>apk + obb gratis para Android en LOMUCHACHOgames y se el mejor mago.</p><p>LEGO Harry Potter: años 1 a 4 HACK para Android es una gran opcion a la hora de elegir ente juegos de aventura. Algunas características de este son:</p>
<ul>
 	<li> MOD del juego</li>
</ul>";
include_once '../templates/game/v1.php';