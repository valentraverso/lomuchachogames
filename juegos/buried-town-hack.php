<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Buried Town HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Buried Town es un juego gratuito de apocalipsis de supervivencia zombie. Uno de los juegos de texto y de historia más atractivos de la historia. Uno de los espantosos juegos de zombies de terror.</p><p>Uno de los juegos de supervivencia más intensos de la historia. Buried Town es un híbrido único de juegos de supervivencia zombie y juegos de aventura de texto. Llega a 10 millones de descargas en todo el mundo, y es GRATIS. El jugador tiene que enfrentar una situación desconocida y sobrevivir hasta el último día en el campo de batalla.</p><p>Descarga&nbsp;<strong>Buried Town HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y mule zombies</p><p><strong>Buried Town HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';