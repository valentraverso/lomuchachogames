<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Ittle Dew'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>La aventurera Ittle Dew y su compañera Tippsie llegan a una isla extraña, llena de botines y habitantes misteriosos. El dúo se da cuenta rápidamente de que esta podría convertirse en su mayor aventura hasta el momento.<br><br>Ittle Dew reduce la fórmula de aventura clásica hasta que solo queda la diversión. ¡Experimenta rompecabezas tortuosos, un juego atemporal y mucha exploración.</p><p>Descarga&nbsp;<strong>Ittle Dew</strong>&nbsp;apk + datos obb en su ultima version para Android&nbsp;en LOMUCHACHOgames y disfruta de la buena compañia.</p>";
$info = "<p><strong>Ittle Dew</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Muchos secretos y atajos para explorar.</li><li>Combina tus herramientas de maneras ingeniosas.</li><li>Hermosos gráficos de alta definición dibujados a mano.</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';