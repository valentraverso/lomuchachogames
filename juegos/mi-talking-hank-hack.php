<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Mi Talking Hank HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Adopta a tu propio y hermoso cachorrito Hank. Él es muy especial. Un cachorro tan dulce que no puedes dejar de mirarlo. Cuida a Hank, tu nueva mascota virtual favorita. Aliméntalo con comida deliciosa, acompáñalo al baño y llévalo a su hamaca para que duerma bajo un cielo estrellado.</p><p>Descarga <strong>Mi Talking Hank HACK&nbsp;</strong>apk en LOMUCHACHOgames y diviertete.</p><p>Lo que trae Mi Talking Hank HACK:</p><ul><li>Dinero Ilimitado</li><li>Diamantes Ilimitados</li></ul>";
include_once '../templates/game/v1.php';