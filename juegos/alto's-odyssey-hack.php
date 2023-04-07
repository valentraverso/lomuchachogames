<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Alto\'s Odyssey HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Este es un juego el cual trata de una increible aventura de sandboarding, unete a Alto y a sus amigos y empieza la aventura.</p><p>Vuela sobre dunas barridas por el viento, atraviesa emocionantes cañones y explora ciudades-templo ocultas en un lugar fantástico muy lejos de tu hogar.</p><p>Descarga&nbsp;<strong>Alto's Odyssey HACK 1.0.6&nbsp;</strong>apk en LOMUCHACHOgames y hace sandboarding como los mejores.</p><p>Lo que trae Altos's Odyssey full mod apk:</p><ul><li>Una experiencia en sí misma. Alto's Odyssey es la secuela del aclamado Alto's Adventure, pero no es necesario haber jugado el uno para disfrutar del otro.</li><li>Fácil de aprender, difícil de dominar. La serie de Alto se basa en un elegante sistema de trucos de un toque. Encadena combos y alcanza los 180 objetivos, todo utilizando los controles intuitivos.</li><li>Explora biomas. Desde las dunas hasta la ciudad-templo, pasando por los cañones, explora un paisaje rico y diverso, en el que cada área tiene jugabilidad y efectos visuales únicos.</li><li>Aún más alto. Descubre los secretos del cielo gracias a los globos aerostáticos, los raíles móviles para hacer grinding y el deslizamiento por paredes.</li></ul>";
include_once '../templates/game/v1.php';