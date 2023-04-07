<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Slaughter 3: The Rebels'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Una ciudad escondida del resto del mundo, que tiene una cárcel de alta seguridad que es<br>un complejo carcelario y ha funcionado durante mucho tiempo. Los criminales más peligrosos fueron sentenciados de por vida en él.&nbsp;</p><p>Miles de forajidos acumularon ira y rabia, queriendo liberarse. Todo el complejo carcelario fue ocupado por criminales indignados, el personal y la seguridad fueron asesinados y los habitantes locales obligados a esconderse en el bosque.&nbsp;</p><p>Descarga&nbsp;<strong>Slaughter 3: The Rebels</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y sal de ahi.</p><p><strong>Slaughter 3: The Rebels</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Una gran variedad de enemigos, cada uno de los cuales necesita su propio enfoque.</li><li>Muchos tipos diferentes de armas.</li><li>Interacción con los socios. Equipe a un aliado y mejore sus habilidades.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';