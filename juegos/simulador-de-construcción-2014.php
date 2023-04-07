<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Simulador de Construcción 2014'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Con el Simulador de Construcción 2014 podrás ponerte al volante de 14 máquinas de construcción fieles al original, con unos gráficos 3D de alta calidad.</p>

<p>Excava los cimientos de una vivienda unifamiliar con máquinas realistas, echa hormigón en los encofrados de los muros de una nave industrial o coloca un entramado de tejado enorme con la grúa móvil y pon a prueba tu pulso firme.</p>

<p>Descargar <strong>Simulador de Construcción 2014 </strong>para Android APK + OBB gratis en LOMUCHACHOgames y construye lo que mas quieras.</p>";
include_once '../templates/game/v1.php';