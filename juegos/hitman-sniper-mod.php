<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Hitman Sniper MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Metete en la piel de un asesino a sueldo, el cual es una gran francotirador. Ayudalo a destruyendo a todos sus objetivos con disparos de mas de 200 mts, este juego de acción es muy adictivo y tiene grandes gráficos.</p><p>Exprime al maximo las misiones, y gana la mayor cantidad de dinero para poder comprar nuevos rifles, mas rápidos, fuertes y precisos. Ademas podes personalizar tu arma para estar mas cómodo a la hora de disparar y así tener mayor puntería.</p><p>Descargar <strong>Hitman Sniper MOD </strong>gratis para Android full APK + OBB ultima version en LOMUCHACHOgames.</p>";
$info = "<p>Acá tenes mas información acerca de este grandioso juego shooter llamado <strong>Hitman Sniper MOD</strong>:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "MOD";
include_once '../templates/game/v1.php';