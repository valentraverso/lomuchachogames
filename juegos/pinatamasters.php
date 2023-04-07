<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Pinatamasters'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0 o +";
$texto = "<p>En Pinatamasters deberas romper la piñata que se encuentra colgada. Pasa diferentes niveles, compra armas y recoge monedas, ademas puedes modificar a tu personaje a tu gusto.</p>

<p>Este juego esta revolucinando la forma de matar piñatas, ¿que estas esperando para descargarlo?</p>

<p>Descargar <strong>Pinatamasters </strong>apk gratis en LOMUCHACHOgames y mata a las cosas que cuelgan.</p><p>Descarga Pinatamasters gratis y divertite sin parar.</p>";
include_once '../templates/game/v1.php';