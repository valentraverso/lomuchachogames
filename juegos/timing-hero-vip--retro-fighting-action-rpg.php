<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Timing Hero VIP : Retro Fighting Action RPG'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>Me recuerda a la game boy, es nostalgico.</p><p>Basico y entretenido, algo nostalgico.</p><p>Descarga <strong>Timing Hero VIP : Retro Fighting Action RPG&nbsp;</strong>apk gratis en LOMUCHACHOgames y diviertete.</p><p>Lo que trae Timing Hero VIP : Retro Fighting Action RPG gratis:</p><ul><li>Nuevas características</li><li>Coliseo</li><li>Asalto</li><li>Consejos para el Coliseo/Asalto</li></ul>";
include_once '../templates/game/v1.php';