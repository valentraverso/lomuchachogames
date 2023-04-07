<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Bully: Anniversary Edition MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Rockstar sigue con su tradición de crear juegos originales y vanguardistas con humor irónico, y esta vez llega al patio de la escuela con Bully: Anniversary Edition. Encarnarás a Jimmy Hopkins, un travieso quinceañero, y ascenderás por la jerarquía social de la Academia Bullworth, una escuela privada corrupta y decadente.&nbsp;</p><p>Defiéndete de los bullies, soporta la presión de los profesores, derrota a los deportistas en quemados, haz bromas, conquista o pierde a la chica y sobrevive un año en la peor escuela que te puedas encontrar.</p><p>Descarga&nbsp;<strong>Bully: Anniversary Edition MOD</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y revive los viejos tiempos.</p>";
$info = "<p><strong>Bully: Anniversary Edition MOD</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "8.0 o+";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';