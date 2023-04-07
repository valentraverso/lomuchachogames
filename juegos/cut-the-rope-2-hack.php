<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Cut the Rope 2 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.2 o +";
$texto = "<p>Fácil de jugar pero difícil de dominar, Cut the Rope 2 trae desafíos frescos e intrincados y obstáculos inesperados al fenómeno casual que adoran tanto los preescolares como los adultos.&nbsp;</p><p>Mantén tu cerebro alerta y potencia tu habilidad para resolver problemas dominando los complicados niveles con base física realista.</p><p>Descarga&nbsp;<strong>Cut the Rope 2 HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y completa todos los niveles.</p><p><strong>Cut the Rope 2 HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';