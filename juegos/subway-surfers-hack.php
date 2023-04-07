<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Subway Surfers HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Corre tan rápido como puedas y esquiva los trenes que vienen hacia ti. Ayuda a Jake, Tricky y Fresh a escapar del inspector&nbsp;gruñón&nbsp;y su&nbsp;perro.&nbsp;</p><p>Planta cara a los trenes con tu superpandilla. Gráficos&nbsp;coloridos y brillantes en alta definición. Surfea en aeropatín.</p><p>Descarga&nbsp;<strong>Subway Surfers HACK&nbsp;</strong>apk ultima version&nbsp;en LOMUCHACHOgames y llega hasta tu limite.</p><p><strong>Subway Surfers HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';