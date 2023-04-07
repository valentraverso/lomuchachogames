<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Funfair Ride Simulator 4'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>¿Alguna vez ha tenido la oportunidad de diseñar y controlar su propia atracción de feria en la feria?<br>Ahora usted puede experimentar esto con el nuevo recinto ferial de paseo en el simulador 4. Diseño, control de todo, y montar más de 15 atracciones únicas (4 incluidos en la aplicación de base)! Con la física, gráficos detallados, la niebla, los láseres y otros efectos de luz en un parque de atracciones simulado.&nbsp;</p><p>Tomar asiento en una de las góndolas y la experiencia de su propio paseo a algunas de las atracciones más impresionantes que se pueden encontrar en el recinto ferial de todo el mundo.&nbsp;</p><p>Descarga&nbsp;<strong>Funfair Ride Simulator 4</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y disfruta de el parque de diversiones.</p>";
$info = "<p><strong>Funfair Ride Simulator 4</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Controlar los paseos más fascinantes que se pueden encontrar en el recinto ferial de todo el mundo</li><li>Diseño de sus paseos - color de casi todas las partes y elegir una tematización</li><li>Interactuar y reaccionan las personas</li></ul>";
$versiondispositivo = "7.0 o +";
$mod = "";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';