<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Ramboat 2 - The metal soldier shooting game HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0 o +";
$texto = "<p>Una nueva aventura de disparos de Ramboat, una nueva guerra en la que demostrarás que eres el soldado de metal héroe que derrotará al Coronel y su ejército. Descubre una nueva experiencia arcade de acción llena de armas y balas.</p><p>Recoge armas asombrosas, mejora y personaliza a tu soldado de metal, conduce vehículos militares, prepárate para el combate e ingresa al mejor juego de disparos de plataformas.</p><p>Descarga <strong>Ramboat 2 - The metal soldier shooting game HACK&nbsp;</strong>apk en LOMUCHACHOgames y gana siempre.</p><p>Lo que trae Ramboat 2 - The metal soldier shooting game HACK:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once '../templates/game/v1.php';