<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Hide.io HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>En el que usted se esconde y encuentra a otras personas en vivo con muchos jugadores.</p><p>Se convierte en un objeto y se esconde bien, como si has hecho parte del mapa desde el principio.<br>Conviértete y encuentre los objetos ocultos.</p><p>Descarga <strong>Hide.io HACK&nbsp;</strong>apk en LOMUCHACHOgames y gana siempre.</p><p>Lo que trae Hit &amp; Knockdown HACK:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once '../templates/game/v1.php';