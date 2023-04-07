<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Happy Wheels MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Happy Wheels es un juego de obstáculos de desplazamiento lateral basado en la física con más de mil millones de juegos en línea y ahora está disponible para sus dispositivos móviles.&nbsp;</p><p>Asume el papel de tu corredor inadecuadamente preparado e ignora las graves consecuencias en una búsqueda desesperada de la victoria.</p><p>Descarga&nbsp;<strong>Happy Wheels MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y disfruta de todos los mundos.</p>";
$info = "<p><strong>Happy Wheels MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Más de 60 niveles únicos y desafiantes.</li><li>Obstáculos mortales: picos, minas, bolas de demolición, arpones y mucho más.</li><li>Física suave y realista.</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "MOD";
include_once '../templates/game/v1.php';