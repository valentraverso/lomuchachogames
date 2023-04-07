<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Clash Royale HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Consigue y mejora una gran variedad de cartas de las tropas, hechizos y defensas de Clash&nbsp;of&nbsp;Clans y de los personajes nobles, entre los que se encuentran el príncipe, el caballero y el bebé dragón.&nbsp;</p><p>Destruye las torres enemigas del rey y las princesas para vencer a tu rival y ganar trofeos, coronas y gloria en la arena. Forma un clan para compartir cartas y levanta tu propia comunidad de batalla.</p><p>Descarga&nbsp;<strong>Clash Royale HACK</strong>&nbsp;apk ultima versión&nbsp;en LOMUCHACHOgames y logra derribarle las torres a tu enemigo.</p><p><strong>Clash Royale HACK</strong> APK para Android es una gran opción a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';