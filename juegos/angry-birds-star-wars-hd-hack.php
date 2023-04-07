<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Angry Birds Star Wars HD HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Hace mucho tiempo en una galaxia muy, muy lejana... un grupo de pájaros rebeldes desesperados se enfrentaron a una amenaza galáctica: el malvado imperio de los Cerdos imperiales.</p><p>Los pájaros rebeldes, atacando desde una base oculta, han logrado su primera victoria contra los malvados Cerdos imperiales. Durante la batalla, los espías rebeldes consiguieron robar los planos secretos del arma definitiva del Imperio, el CERDO DE LA MUERTE, y se apresuran a entregar los planos a los Pájaros Rebeldes.</p><p>Descarga&nbsp;<strong>Angry Birds Star Wars HD HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y disfruta de los pájaros vengadores.</p><p><strong>Angry Birds Star Wars HD HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';