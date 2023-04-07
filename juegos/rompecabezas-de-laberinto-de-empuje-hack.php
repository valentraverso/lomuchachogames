<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Rompecabezas de laberinto de empuje HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>Simplemente presionando los botones y deslizando, resuelve los acertijos. Despeja misiones escénicas y desafía niveles más altos.</p><p>Descarga <strong>Rompecabezas de laberinto de empuje HACK&nbsp;</strong>apk en LOMUCHACHOgames y diviertete.</p><p>Lo que trae Rompecabezas de laberinto de empuje HACK:</p><ul><li>Dinero Ilimitado</li><li>Ayudas Ilimitadas</li></ul>";
include_once '../templates/game/v1.php';