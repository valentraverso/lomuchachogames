<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Code of War: Shooter en línea HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Code of War es el juego de disparos en línea con los mejores gráficos en 3D, física realista y una gran selección de armas reales.Prueba tus habilidades y dominio en la acción dinámica en línea contra otros jugadores de todo el mundo.</p><p>Conviértete en el mejor y logra los primeros sitios en la clasificación mundial.<br>Mejora el dominio y las habilidades de tu combatiente para que se vuelva más poderoso</p><p>Descarga <strong>Code of War: Shooter en línea HACK&nbsp;</strong>apk gratis en LOMUCHACHOgames y elimina a todos.</p><p>Lo que trae Code of War: Shooter en línea HACK apk + obb para android:</p><ul><li>Jugador Invisible</li></ul>";
include_once '../templates/game/v1.php';