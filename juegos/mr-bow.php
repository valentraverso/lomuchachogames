<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Mr Bow'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o 6+";
$texto = "<p>Conviértete en un arquero legendario en Mr Bow 1.10, toma tu arco y llena de flechas a tus enemigos que se encuentran dentro de plataformas separadas a la tuya.</p><p>Elige arco y flecha, afina tu puntería, dispara y destruye a tus stickmans enemigos, dales hermosos disparos en la cabeza y gana mas puntos finales y dinero. Compra diferentes y mejores arcos que el ya tienes.</p><p>Descarga&nbsp;<strong>Mr Bow </strong>1.10 APK gratis en LOMUCHACHOgames y convertite en un arquero.</p><p>Lo que trae Mr Bow full apk:</p><ul><li>Fácil control con toques adictivos de golpes.</li><li>Una lista de héroes con habilidad única.</li><li>Varias armas para elegir.</li><li>Controles sencillos y jugabilidad adictiva.</li><li>Gráficos minimalistas y animaciones teatrales</li></ul>";
include_once '../templates/game/v1.php';