<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Dead Island Survivors HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Prepárate para la experiencia de acción zombi definitiva para smartphone y tablet basada en Dead Island, la serie superventas de Deep Silver, que cuenta con más de quince millones de unidades vendidas en PC y consolas. Reúne héroes legendarios e ingeniosas armas. Construye trampas astutas y barricadas sólidas. Utiliza combinaciones espectaculares y movimientos especiales. Haz todo lo que puedas para mantener a raya a las hordas zombis.</p><p>Dead Island, la mejor serie de juegos de zombis del mundo, llega a los móviles, reúne a tu grupo de héroes, fortifica tu base y enfréntate junto a tus amigos a las hordas.</p><p>Descarga&nbsp;<strong>Dead Island Survivors HACK</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y elimina los zombies.</p><p><strong>Dead Island Survivors HACK</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';