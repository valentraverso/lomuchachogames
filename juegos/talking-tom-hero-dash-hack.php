<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Talking Tom Hero Dash HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Uno de los juegos de carreras interminables más divertidos. Los jugadores se unen a Tom y a sus heroicos amigos en una misión en la cual corren, consiguen oro y reconstruyen el mundo.&nbsp;</p><p>Cualquiera que juegue este nuevo juego de acción se sentirá como un verdadero superhéroe, los jugadores a los que les encanta Talking Tom: A por el oro y otros juegos de carreras o de superhéroes.</p><p>Descarga&nbsp;<strong>Talking Tom Hero Dash HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y se el mejor superheroe.</p><p><strong>Talking Tom Hero Dash HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero Ilimiado</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';