<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'VGAR VIP'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>VGAR VIP es un gran juego de Virtual Reality, donde lo que tendras que hacer es conseguir una novia.</p><p>Experimenta lo que se siente tener una novia virtual y dale todo el cariño y afecto que sea posible. Se el mejor novio de todos y consigue la chica de tus sueños.</p><p>Descargar&nbsp;<strong>VGAR VIP&nbsp;</strong>apk gratis en LOMUCHACHOgames y experimenta una relación amorosa en VR.</p><p>Lo que trae VGAR VIP apk:</p><ul><li>Novia virtual.</li></ul>";
include_once '../templates/game/v1.php';