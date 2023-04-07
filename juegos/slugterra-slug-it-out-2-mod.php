<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Slugterra Slug it Out 2 MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Las babosas están desapareciendo a lo largo y ancho de las 99 cavernas y depende de ti esclarecer este misterio. Lleva a las babosas de regreso a su hogar y devuelve el delicado equilibrio de la energía de babosa en este inframundo.</p><p>&nbsp;Juega como el héroe, Eli Shane, mientras resuelves el misterio a lado de Burpy, tu mejor amigo babosa. Reúne un arsenal de estas criaturitas que se transforman y que cuentan con extraordinarios poderes y, mientras aumenta su nivel con experiencia, mira cómo las transformaciones de tus babosas se hacen épicas.</p><p>Descarga&nbsp;<strong>Slugterra: Slug it Out 2 MOD</strong>&nbsp;apk + datos obb en su ultima version para Android&nbsp;en LOMUCHACHOgames y se el verdadero heroe.</p>";
$info = "<p><strong>Slugterra: Slug it Out 2 MOD</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';