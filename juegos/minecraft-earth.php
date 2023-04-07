<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Minecraft Earth'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "8.0 o+";
$texto = "<p>Descubre una nueva dimensión de Minecraft al crear, explorar y sobrevivir en el mundo real.&nbsp;</p><p>Únete a una comunidad de constructores y exploradores que están por todo el planeta, recopila recursos para tus creaciones, fabrícalas en realidad aumentada y después colócalas en tamaño natural. Incluso puedes hacer equipos con otras personas para las miniaventuras.</p><p>Descarga&nbsp;<strong>Minecraft Earth</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y vive Minecraft en otro nivel.</p><p><strong>Minecraft Earth</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>CONSTRUYE</li><li>COLABORA</li><li>EXPLORA</li><li>DESCUBRE</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';