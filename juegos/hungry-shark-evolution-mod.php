<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Hungry Shark Evolution MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Toma el control de un tiburón hambriento y arrasa con la vida marina! ¡Sobrevive tanto como puedas devorando todo lo que se interponga en tu camino.&nbsp;</p><p>Explora el mundo submarino y haz evolucionar famosos tiburones como el tiburón blanco y el megalodón.&nbsp;</p><p>Descarga&nbsp;<strong>Hungry Shark Evolution MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y descubre las profundidades.</p>";
$info = "<p><strong>Hungry Shark Evolution MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Gemas y Dinero Ilimitado</li><li>God Mode</li><li>Gold Mode</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';