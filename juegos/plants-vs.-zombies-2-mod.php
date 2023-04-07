<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Plants vs. Zombies 2 MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Coloca tus plantas estrategicamente para que los zombies no pasen por tu jardin y lleguen a tu casa. En Plants vs Zombies 2 full vas a tener todas los niveles, plantas y zombies desbloqueado.</p><p>En esta ocasión, sin embargo, no solo tendremos que defender el jardín de nuestros dueños del ataque de los zombis, sino que tendremos que viajar por el tiempo a lo largo de distintas fases de la historia, para proteger lugares clave del mundo con la ayuda de nuestras plantas.</p><p>Descargar&nbsp;<strong>Plants vs Zombies&nbsp;2&nbsp;MOD </strong>full apk ultima version en LOMUCHACHOgames y unite a pelear con las plantas.</p>";
$info = "<p>Lo que trae <strong>Plants vs Zombies 2 MOD</strong> full gratis para Android:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "MOD";
include_once '../templates/game/v1.php';