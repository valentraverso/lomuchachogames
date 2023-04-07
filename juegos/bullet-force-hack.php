<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Bullet Force HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.2 o +";
$texto = "<p>El mejor maestro de FPS en Android, prueba este juego de disparos en primera persona en línea o sin internet con una gran cantidad de personalizaciones de armas reales y arenas. Bullet Force es un juego de disparos y acción en 3D. Lucha junto a tus compañeros de equipo en una guerra masiva de combate de 20 jugadores utilizando una variedad de armas emblemáticas (escopetas, rifles, francotiradores, AK-47 y más). Prepárate para matar a todos tus enemigos en este juego de supervivencia.</p><p>Con más de 20 armas, 30 camuflajes, múltiples lentes, miras láser y accesorios de cañones, las posibilidades son prácticamente infinitas.</p><p>Descarga&nbsp;<strong>Bullet Force HACK</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y aniquila a todo ser vivo.</p><p><strong>Bullet Force HACK</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';