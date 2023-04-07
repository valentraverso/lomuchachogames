<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Truck Simulator PRO Europe'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Truck Simulator Pro Europe es hasta ahora el juego de simulación de conducción más avanzado, orientado a los detalles y el más grande disponible para dispositivos móviles en&nbsp;LOMUCHACHOgames</p><p>Descarga <strong>Truck Simulator PRO Europe&nbsp;</strong>apk y obb gratis en LOMUCHACHOgames y recorre todo lo que puedas.</p><p>Lo que trae Truck Simulator PRO Europe gratis:</p><ul><li>Maneja 8 camiones diferentes y personalízalos según tus necesidades</li><li>Contratar asistentes para que trabajen para usted y crear una gran flota</li><li>Completar cientos de misiones diferentes</li><li>Cuidar la economía de su negocio y desbloquear los envíos más rentables</li></ul>";
include_once '../templates/game/v1.php';