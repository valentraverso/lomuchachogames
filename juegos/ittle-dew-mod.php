<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Ittle Dew MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>La aventurera Ittle Dew y su compañera Tippsie llegan a una isla extraña, llena de botines y habitantes misteriosos. El dúo se da cuenta rápidamente de que esta podría convertirse en su mayor aventura hasta el momento.<br><br>Ittle Dew reduce la fórmula de aventura clásica hasta que solo queda la diversión. ¡Experimenta rompecabezas tortuosos, un juego atemporal y mucha exploración.</p><p>Descarga&nbsp;<strong>Ittle Dew MOD</strong>&nbsp;apk + datos obb en su ultima version para Android&nbsp;en LOMUCHACHOgames y disfruta de la buena compañia.</p>";
$info = "<p><strong>Ittle Dew MOD</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Full Game</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';