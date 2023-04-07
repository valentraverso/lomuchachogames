<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Tropico'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "8.0 o+";
$texto = "<p>Como líder recién elegido de una isla caribeña subdesarrollada pero con recursos sin explotar y un enorme potencial, las esperanzas se han puesto en ti para llevar a Tropico al glorioso futuro que su gente merece. Las oportunidades son ilimitadas en este divertido juego de construcción de ciudades con un toque político.</p><p>Salve a Su Excelencia, la orgullosa nación de Tropico está ahora en tus manos y necesita modernizarse urgentemente.</p><p>Descarga&nbsp;<strong>Tropico</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y se el mejor mandatario.</p><p><strong>Tropico</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>TÚ MANDAS</li><li>SÉ UN LÍDER VISIONARIO</li><li>JUEGA A LOS POLÍTICOS</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';