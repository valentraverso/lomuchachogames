<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'The Big Capitalist 3 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>El primer paso es muy simple. Haga clic para ganar su primer cubo de oro “$ 1” exprimiendo el jugo de limón. Después de acumular suficiente capital inicial, puede empezar a criar pollos y venta de huevos. Y hay empresas más interesantes que le esperan para desbloquear.</p><p>Descarga <strong>The Big Capitalist 3&nbsp;</strong>apk en LOMUCHACHOgames y se el mas grande de todos.</p><p>Lo que trae The Big Capitalist 3 HACK:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once '../templates/game/v1.php';