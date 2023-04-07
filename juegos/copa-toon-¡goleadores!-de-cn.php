<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Copa Toon: ¡Goleadores! de CN'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Juega como uno de los 16 diferentes capitanes de tus programas de Cartoon Network favoritos, como Hora de aventura, Steven Universe, Un show más, El increíble mundo de Gumball, Escandalosos, Clarence y Tío Grandpa.</p><p>Conviértete en goleador con tus personajes favoritos de Cartoon Network en Copa Toon</p><p>Descarga <strong>Copa Toon: ¡Goleadores! de CN&nbsp;</strong>apk y obb gratis en LOMUCHACHOgames y se el mejor en la cancha.</p><p>Lo que trae Copa Toon: ¡Goleadores! de CN gratis:</p><ul><li>FÚTBOL SOFISTICADO</li><li>CAOS DE VARIOS JUGADORES</li><li>DIVERSIÓN GARANTIZADA</li></ul>";
include_once '../templates/game/v1.php';