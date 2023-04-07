<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Racing Xtreme 2: Top Monster Truck HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Pilota potentísimos Monster Trucks, compite con los monstruosos vehículos todoterreno 4x4 más rápidos y disfruta de carreras llenas de saltos en las hermosas colinas y valles de la campiña estadounidense.</p><p>Descarga <strong>Racing Xtreme 2: Top Monster Truck HACK&nbsp;</strong>apk en LOMUCHACHOgames y aniquila lo mejor posible.</p><p>Lo que trae Racing Xtreme 2: Top Monster Truck HACK:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once '../templates/game/v1.php';