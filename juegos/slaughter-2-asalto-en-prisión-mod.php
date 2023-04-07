<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Slaughter 2: Asalto en Prisión MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Recibimos un mensaje perturbador: se produjo un motín en la prisión de Burdeck. Todo el personal está muerto, los alrededores de la ciudad son capturados. Un hombre misterioso y loco llamado Tsantsa está detrás de todos estos eventos.</p><p>Se enviaron operaciones especiales de inmediato a la ciudad, su tarea es limpiar la ciudad y las prisiones de los presos locos.</p><p>Descarga&nbsp;<strong>Slaughter 2: Asalto en Prisión MOD</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y extermina la ciudad.</p>";
$info = "<p><strong>Slaughter 2: Asalto en Prisión MOD</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD de Dinero</li></ul>";
$versiondispositivo = "4.4 o +";
$mod = "MOD";
include_once '../templates/game/v1.php';