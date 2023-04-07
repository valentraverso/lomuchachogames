<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Super Mario Run HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Volve a los viejos tiempos en los que Mario y sus aventuras no deslumbraban, ahora vos podes crear tus propios mundo y jugar en los de otro.</p>

<p>Por eso tenes que descargar Super Mario Run apk GRATIS en LOMUCHACHOgames, para poder vengarte de esas tortugas que tantos enojos te dieron en tu niñes.</p>

<p>Descargar<strong> Super Mario Run HACK </strong>apk gratis para Android en LOMUCHACHOgames y retrocede el tiempo para volver al maravilloso mundo de Mario.</p>";
include_once '../templates/game/v1.php';