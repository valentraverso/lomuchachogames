<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'METAL SLUG'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3.3 o +";
$texto = "<p>Atraviesa diversos campos de batalla, para prevenir las ambiciones de la armada rebelde del General Morden, rescata a los prisioneros atrapados por el enemigo para obtener varios objetos en las misiones.</p><p>Hay objetos que mejoran tus armas! Así como también hay prisioneros en lugares ocultos, por supuesto puedes atacar con los cañones y los cañones vulcan, además tienes movimientos evasivos como agaches y saltos.</p><p>Descarga&nbsp;<strong>METAL SLUG</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y comleta todas las misiones.</p><p><strong>METAL SLUG</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Obtén objetos de los prisioneros rescatados</li><li>Aprende a utilizar los Súper Vehículos, Metal Slug</li><li>Hemos implementado un sistema de juego para un juego sencillo</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';