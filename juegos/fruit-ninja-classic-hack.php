<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Fruit Ninja Classic HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>A partir de ahí, explora los matices de Classic, Zen y el favorito de los fans, el modo Arcade, para ampliar tus habilidades. Rebana para una puntuación más alta, utiliza potenciadores y plátanos especiales para un efecto máximo y vuélvete loco con la granada multicorte.&nbsp;</p><p>Nunca ha habido un mejor momento para jugar Fruit Ninja, así que desenvaina tu espada y ve qué hay de nuevo en el juego que lo empezó todo.</p><p>Descarga&nbsp;<strong>Fruit Ninja Classic HACK</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y rebana las frutas a tu manera.</p><p><strong>Fruit Ninja Classic HACK</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';