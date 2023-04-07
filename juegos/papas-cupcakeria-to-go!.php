<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Cupcakeria To Go!'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Tendrá que realizar múltiples tareas entre cuatro áreas de la tienda de la magdalena, con nuevos controles diseñados para funcionar a la perfección en la palma de su mano.</p><p>Mantén contentos a sus clientes para ganar más puntos y subir de nivel. A medida que su nivel se eleva, podrás desbloquear nuevos ingredientes para la tienda, y los nuevos clientes comenzará visitando el Cupcakeria.</p><p>Descarga <strong>Papas Cupcakeria To Go!</strong>&nbsp;para Android gratis apk en LOMUCHACHOgames y haz los mejores alimentos.</p><p>Mas cosas acerca de Papas Cupcakeria To Go! para Android gratis:</p><ul><li>12 días de fiesta separados para desbloquear</li><li>97 clientes para desbloquear</li><li>Personaliza y decora su tienda</li><li>Manos a la tienda de la magdalena</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';