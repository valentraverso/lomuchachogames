<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'DOOM'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "8.0 o+";
$texto = "<p>Revive el nacimiento del juego de disparos en primera persona, donde quiera que vayas, y experimenta la clásica diversión de explosión de demonios que popularizó el género.</p><p>Ahora disponible LOMUCHACHOgames.com en dispositivos Android. Lanzado por primera vez en 1993, DOOM presentó a millones de jugadores a la acción acelerada, de nudillos blancos y asesinos de demonios por la que la franquicia es conocida.</p><p>Descarga&nbsp;<strong>DOOM</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y recorre otro planeta!</p><p><strong>DOOM</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Celebre el 25 aniversario de DOOM con el relanzamiento del DOOM original (1993).</li><li>Incluida la expansión</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';