<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Squad Strike 3'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>Squad Strike 3 es un juego de disparo en primera persona, elegi tu arma principal y secundaria y ademas cargate unas granadas por si acaso. Entraras a un campo abierto, donde dos bandos se enfrentaran y tendrás que matar a la mayor cantidad de enemigos posibles.</p><p>Elije entre el modo online u offline y divertite en este juego de disparo para Android, el cual tiene muy buenos graficos y una gran jugabilidad.</p><p>Descargar&nbsp;<strong>Squad Strike 3&nbsp;</strong>APK ultima version en LOMUCHACHOgames y que empiece la guerra.</p><p>Lo que trae Squad Strike 3 para Android:</p><ul><li>Elegi tus armas.</li><li>Podes jugar online u offline.</li><li>Grandes graficos y aiming.</li></ul>";
include_once '../templates/game/v1.php';