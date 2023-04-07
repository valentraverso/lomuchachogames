<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Creative Destruction'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Creative Destruction es un juego tipo sandbox de supervivencia para celular que combina la creación de sandbox y \"Battle Royale\" con un estilo artístico de dibujo animado. Los jugadores descienden en paracaídas sobre un campo de batalla a gran escala de 16 000 000 metros cuadrados con 13 ubicaciones de interés a la espera de ser exploradas.&nbsp;</p><p>En este mundo virtual, todos los elementos se pueden construir o desmantelar. Los exploradores pueden usar un arma secreta llamada Destructor para desmantelar cualquier cosa a la vista y construir bastiones mediante un sistema de taller innovador.</p><p>Descarga&nbsp;<strong>Creative Destruction</strong>&nbsp;apk + datos obb en su ultima version para Android&nbsp;en LOMUCHACHOgames y trata de quedar ultimo en la arena.</p>";
$info = "<p><strong>Creative Destruction</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Consigue armas exclusivas</li><li>Enfrenta tormentas de nieve</li><li>Lucha hasta la muerte</li><li>Construye lo mejor y destruye el resto</li><li>Únete al combate mortal con destrucción</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';