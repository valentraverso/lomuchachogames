<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Dream League Soccer 2018'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Descarga Dream League Soccer 2018 HOY gratis en LOMUCHACHOgames, y forma el mejor equipo de futbol del mundo con tus jugadores favoritos.</p><p>&nbsp;</p><p>Ahora tenes el poder y solo vos pones tus metas con tu DREAM TEAM. Descargar Dream League Soccer y se el mejor DT del mundo.</p>";
include_once '../templates/game/v1.php';