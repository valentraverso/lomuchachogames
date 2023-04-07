<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Hit & Knockdown HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Cuando golpeas al objetivo con una pelota, el objetivo derriba o explota. Lograr el puntaje de etapa para despejar luego desafiar el siguiente nivel.</p><p>Descarga <strong>Hit &amp; Knockdown HACK&nbsp;</strong>apk en LOMUCHACHOgames y tira todos los tachos.</p><p>Lo que trae Hit &amp; Knockdown HACK:</p><ul><li>Articulos Ilimitado</li></ul>";
include_once '../templates/game/v1.php';