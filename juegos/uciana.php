<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Uciana'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.2 o +";
$texto = "<p>Construye tu propio imperio espacial en este juego que es un verdadero móvil 4X. Descubre nuevas tecnologías, otras razas alienígenas, naves abandonados y mucho más a medida que extiendes tu Imperio a las estrellas.</p>

<p>Los mapas de galaxias y los sistemas estelares se generan por procedimientos, por lo que con cada juego habrá algo nuevo por descubrir.</p>

<p>Descargar<strong> Uciana </strong>apk gratis para Android en LOMUCHACHOgames y crea el mejor imperio.</p>";
include_once '../templates/game/v1.php';