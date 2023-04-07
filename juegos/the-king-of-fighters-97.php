<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'THE KING OF FIGHTERS 97'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3.3 o +";
$texto = "<p>Getting Over It with Bennett Foddyes un juego de escalada castigar, un homenaje a Jazzuo de 2002 B-juego clásico 'Sexy Senderismo'. Mueve el martillo con el ratón, y eso es lo que hay.&nbsp;</p><p>Con la práctica, usted será capaz de saltar, girar, escalar y volar. Grandes misterios y una recompensa maravillosa esperan a los excursionistas maestros que llegan a la cima de la montaña.</p><p>Descarga&nbsp;<strong>Getting Over It with Bennett Foddyes</strong> apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y trata de escalar la montaña.</p><p><strong>Getting Over It with Bennett Foddyes</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Sube por una enorme montaña con nada más que un martillo y una olla.</li><li>Escucha mientras hago observaciones filosóficas sobre el problema en cuestión.</li><li>Pierde todo su progreso, una y otra vez.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';