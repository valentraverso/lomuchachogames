<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Pancakeria To Go!'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>Estarás ocupado haciendo multitareas mientras tus clientes piden panqueques esponjosos, waffles dorados, tostadas francesas calientes y deliciosas bebidas durante todas las estaciones del año.</p><p>Mantener contentos a sus clientes para ganar más puntos y subir de nivel. A medida que su nivel aumenta, podrás desbloquear nuevos ingredientes para la tienda, y los nuevos clientes.</p><p>Descarga <strong>Papas Pancakeria To Go!</strong>&nbsp;para Android gratis apk en LOMUCHACHOgames y haz los mejores panqueques.</p><p>Mas cosas acerca de <strong>Papas Pancakeria To Go!</strong> para Android gratis:</p><ul><li>12 días festivos separados</li><li>Gana y domina 40 recetas</li><li>90 pegatinas coloridas</li><li>117 clientes para servir con pedidos únicos.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';