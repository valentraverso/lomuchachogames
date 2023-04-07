<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'TruckSimulation 16 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>En <strong>TruckSimulation 16 HACK</strong>, conducirás de manera realista uno de los nueve camiones auténticos disponibles. Comienza con una tartana vieja y rota y gánate tu primer sueldo en una variedad de contratos de suministro a lo largo y ancho de una gran red de carreteras por Europa occidental y central. Invierte el dinero que ganes en comprar mejores camiones.</p><p>Diferentes tipos de misiones, desde pedidos estándar hasta transporte de mercancías peligrosas, te ofrecen una gran variedad.</p><p>Descarga <strong>TruckSimulation 16 HACK</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y se el mejor chofer de camiones del mundo.</p><p><strong>TruckSimulation 16 HACK</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del juego.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';