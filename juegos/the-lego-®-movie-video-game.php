<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'The LEGO ® Movie Video Game'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>Transforma lo ordinario en extraordinario y disfruta de una gran experiencia constructiva de LEGO con La LEGO Película: El Videojuego cuando llegué a los móviles.</p>

<p>Entra en el mundo de Emmet, un ciudadano medio, completamente ordinario, y que sigue las reglas a rajatabla, pero que será confundido con una de las personas más extraordinarias del mundo y la clave para salvar al mundo. Los jugadores deberán guiarle en una épica aventura para detener a un malvado tirano, un viaje para el que Emmet no está preparado.</p>

<p>Descargar <strong>The LEGO ® Movie Video Game </strong>apk + obb gratis para Android en LOMUCHACHOgames y haz la mejor creacion.</p><p>The LEGO ® Movie Video Game para Android es una gran opcion a la hora de elegir ente juegos de aventura. Algunas características de este son:</p>
<ul>
 	<li>Viaja a través de fantásticos mundos</li>
 	<li>Revienta más bloques que nunca</li>
 	<li>Colecciona y utiliza las páginas de instrucciones de LEGO</li>
</ul>";
include_once '../templates/game/v1.php';