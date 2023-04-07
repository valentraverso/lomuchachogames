<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Plant vs Zombies 2'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Coloca tus plantas estrategicamente para que los zombies no pasen por tu jardin y lleguen a tu casa. En Plants vs Zombies 2 full vas a tener todas los niveles, plantas y zombies desbloqueado.</p><p>En esta ocasión, sin embargo, no solo tendremos que defender el jardín de nuestros dueños del ataque de los zombis, sino que tendremos que viajar por el tiempo a lo largo de distintas fases de la historia, para proteger lugares clave del mundo con la ayuda de nuestras plantas.</p><p>Descargar&nbsp;<strong>Plants vs Zombies&nbsp;2&nbsp;</strong>full apk + obb ultima version en LOMUCHACHOgames y unite a pelear con las plantas.</p><p>Lo que trae Plants vs Zombies 2 full gratis para Android:</p><ul><li>Descubre cientos de plantas y zombis.</li><li>Cultiva plantas poderosas.</li></ul>";
include_once '../templates/game/v1.php';