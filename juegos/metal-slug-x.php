<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'METAL SLUG X'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3.3 o +";
$texto = "<p>El famoso shooter de acción 2D \"METAL SLUG X\", llega a Android, previene las ambiciones del restablecido General Morden, y descubre el secreto del segundo golpe de estado.</p><p>La encontrarse con el jefe, la ubicación de los enemigos ha sido cambiada considerablemente, y hemos expandido el mapa para que aún los jugadores experimentados no puedan completar los niveles tan fácilmente.</p><p>Descarga&nbsp;<strong>METAL SLUG X</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y elimina a todos los enemigos.</p><p><strong>METAL SLUG X</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Mejoras de METAL SLUG 2</li><li>Nuevas armas para tomar venganza</li><li>Una adaptación perfecta del juego original de NEOGEO</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';