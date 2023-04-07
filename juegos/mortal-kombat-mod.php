<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'MORTAL KOMBAT MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Reúne a un equipo de personajes de Mortal Kombat 11 para consolas en tu dispositivo móvil. El equipo de MK11 es muy versátil, tiene habilidades únicas y logra potentes combinaciones en equipo para causar más dolor a tus enemigos.</p><p>Crea tu propio equipo de luchadores de Mortal Kombat y lidéralos hacia la batalla para ganar experiencia, nuevos ataques especiales y poderosos artículos.</p><p>Descarga&nbsp;<strong>MORTAL KOMBAT MOD</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y pelea con todos personajes</p>";
$info = "<p><strong>MORTAL KOMBAT MOD</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero y Gemas</li></ul>";
$versiondispositivo = "7.0 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';