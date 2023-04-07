<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Taps To Riches'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Empeza siendo un villano recién salido de la cárcel, y salí desde abajo hasta amasar una gran fortuna. Construí edificios y mejoralos, entre mas dinero inviertas en estos negocios mas produciran.</p>

<p>Toca para hacer dinero, para mejorar los edificios de los negocios de tu ciudad, ¡y toca para algo más! Desbloquea, contrata y recoge tantos Asesores y Bizbots como puedas para mejorar el valor de tus negocios, construir más rápidamente la ciudad, ¡y ganar un montón de dinero, a medida que vas de harapos a riquezas!</p>

<p>Descargar <strong>Tap to Riches </strong>apk full en español gratis en LOMUCHACHOgames y hace mucho dinero.</p>";
include_once '../templates/game/v1.php';