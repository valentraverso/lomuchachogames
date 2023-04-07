<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Donuteria To Go!'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>Tendrá que preparar donas con una variedad de masas y formas, luego tírelas en la freidora y cocine ambos lados hasta que queden bien. Termine las deliciosas rosquillas con sabrosos rellenos, glaseado y coberturas antes de servirlas a sus clientes hambrientos. Los que visitan por primera vez solo pueden pedir una donut para probar, pero los clientes que repiten no pueden obtener lo suficiente y ¡comenzarán a pedir más donuts cuando visiten.&nbsp;</p><p>Powder Point también celebra diferentes días festivos durante todo el año, así que prepárate para desbloquear nuevos ingredientes festivos mientras juegas durante los días festivos.</p><p>Descarga&nbsp;<strong>Papas Donuteria To Go!</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y haz las mejores donas.</p><p><strong>Papas Donuteria To Go!</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>SERVE RECETAS ESPECIALES</li><li>PERSONALIZA A TUS TRABAJADORES</li><li>ENTREGA ESPECIAL</li><li>COLECCIONA LAS ETIQUETAS</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';