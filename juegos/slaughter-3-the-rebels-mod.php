<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Slaughter 3: The Rebels MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Una ciudad escondida del resto del mundo, que tiene una cárcel de alta seguridad que es<br>un complejo carcelario y ha funcionado durante mucho tiempo. Los criminales más peligrosos fueron sentenciados de por vida en él.&nbsp;</p><p>Miles de forajidos acumularon ira y rabia, queriendo liberarse. Todo el complejo carcelario fue ocupado por criminales indignados, el personal y la seguridad fueron asesinados y los habitantes locales obligados a esconderse en el bosque.&nbsp;</p><p>Descarga&nbsp;<strong>Slaughter 3: The Rebels MOD</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y sal de ahi.</p><p><strong>Slaughter 3: The Rebels MOD</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';