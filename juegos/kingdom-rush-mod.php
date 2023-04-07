<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Kingdom Rush MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Prepárate para una aventura épica en la que defenderás tu imperio de hordas de orcos, troles, magos malvados y otros enemigos repugnantes con un arsenal inmenso de torres y conjuros a tus órdenes.&nbsp;</p><p>Lucha en bosques, montañas y páramos, personaliza tu estrategia defensiva con mejoras de torres y especializaciones diferentes.</p><p>Descarga&nbsp;<strong>Kingdom Rush MOD</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y enfrenta a monstruos legendarios para salvar el reino de las fuerzas de la oscuridad.</p>";
$info = "<p><strong>Kingdom Rush MOD</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.0 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';