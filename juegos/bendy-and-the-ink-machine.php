<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Bendy and the Ink Machine'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Es un juego de acción y aventura en primera persona&nbsp;con una atmósfera de dibujos animados y una historia&nbsp;aterradora que te mantiene con el suspenso.</p><p>Viaja a lo profundo de la locura de esta alocada pesadilla basada en dibujos animados y descubre secretos jamas revelados.</p><p>Descarga <strong>Bendy and the Ink Machine</strong>&nbsp;full apk gratis para Android en LOMUCHACHOgames y&nbsp;luchar contra la oscuridad.</p><p>Mas cosas sobre Bendy and the Ink Machine:</p><ul><li>&nbsp;Juego variado</li><li>&nbsp;Mundo de dibujos animados</li><li>&nbsp;Comunidad global</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';