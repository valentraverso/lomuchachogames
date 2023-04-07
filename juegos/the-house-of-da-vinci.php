<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'The House of Da Vinci'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Entra en La casa de Da Vinci, un nuevo juego gráfico 3D de aventuras que debes probar. Resuelve puzles mecánicos, descubre objetos escondidos, escapa de salas y sumérgete en la auténtica atmósfera del Renacimiento.&nbsp;</p><p>Usa todo tu ingenio para descubrir qué se esconde tras la desaparición de tu maestro.</p><p>Descarga&nbsp;<strong>The House of Da Vinci</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y resuelve con tu ingenio.</p><p><strong>The House of Da Vinci</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>RESUELVE PUZZLES MECÁNICOS</li><li>DISFRUTA EL INTUITIVO CONTROL TÁCTIL</li><li>EXPERIMENTA EL RENACIMIENTO</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';