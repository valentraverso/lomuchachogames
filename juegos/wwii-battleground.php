<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'WWII Battleground'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Convertido en el último sobreviviente de la batalla de 100 jugadores. Destruir a los enemigos. Revivir todos los jugadores. Tire de la victoria del enemigo.</p><p>Descarga <strong>WWII Battleground&nbsp;</strong>apk gratis en LOMUCHACHOgames y derrota a tu enemigo.</p><p>Lo que trae WWII Battleground gratis:</p><ul><li>"Battle Royale" desde la Segunda Guerra Mundial</li></ul>";
include_once '../templates/game/v1.php';