<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Hitman Sniper'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Metete en la piel de un asesino a sueldo, el cual es una gran francotirador. Ayudalo a destruyendo a todos sus objetivos con disparos de mas de 200 mts, este juego de acción es muy adictivo y tiene grandes gráficos.</p><p>Exprime al maximo las misiones, y gana la mayor cantidad de dinero para poder comprar nuevos rifles, mas rápidos, fuertes y precisos. Ademas podes personalizar tu arma para estar mas cómodo a la hora de disparar y así tener mayor puntería.</p><p>Descargar <strong>Hitman Sniper </strong>gratis para Android full APK + OBB ultima version en LOMUCHACHOgames.</p><p>Acá tenes mas información acerca de este grandioso juego shooter llamado Hitman:</p><ul><li>CONVIÉRTETE EN EL MEJOR ASESINO SILENCIOSO</li><li>MISIONES TÁCTICAS EN MONTENEGRO</li><li>DESAFÍO DE SUPERVIVENCIA EN EL VALLE DE LA MUERTE</li><li>MÁS DE 150 MISIONES Y 10 CONTRATOS DIFERENTES</li><li>16 ARMAS ÚNICAS</li></ul>";
include_once '../templates/game/v1.php';