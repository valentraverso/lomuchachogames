<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Nimian Legends : BrightRidge'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Corra, nade y vuele a través de cascadas y ríos relucientes, bosques exuberantes, montañas elevadas y mazmorras antiguas. Cambia la forma de dragones poderosos, águilas elevadoras, venados de patas rápidas y más.</p><p>Entra a este genial mundo virtual y recorre cada una de sus misiones e historias.</p><p>Descarga&nbsp;<strong>Nimian Legends : BrightRidge&nbsp;</strong>apk y obb gratis en LOMUCHACHOgames y dale vida a esta historia.</p><p>Lo que trae BrightRidge gratis:</p><ul><li>Explorar y modos historia</li><li>Poder de cambio de forma</li><li>Personaliza tu mundo</li><li>Clima dinamico Dia/Noche</li></ul>";
include_once '../templates/game/v1.php';