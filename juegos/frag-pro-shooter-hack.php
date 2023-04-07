<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'FRAG Pro Shooter HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.3 o +";
$texto = "<p>En FRAG Pro Shooter mod entra al juego de disparos mas descargados en 2019.</p><p>Comperti contra el otro equipo y derrota a todos tus enemigos rojos para ganar y conseguir cofres, con los que conseguiras mejoras para tus personajes.</p><p>Descarga&nbsp;<strong>FRAG Pro Shooter HACK&nbsp;</strong>1.3.3 full apk en LOMUCHACHOgames.</p><p>Lo que trae hack Frag Pro Shooter:</p><ul><li>Dinero infinito.</li><li>Gemas inifinitas.</li></ul>";
include_once '../templates/game/v1.php';