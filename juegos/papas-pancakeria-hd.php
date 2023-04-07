<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Pancakeria HD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Podrás hasta las rodillas en la masa mientras se prepara panqueques, gofres esponjosos de oro, y las pilas calientes de pan tostado francés para sus clientes a través de todas las estaciones del año.</p><p>Cada estación en el restaurante es un proceso práctico, y que tendrá que realizar varias tareas entre todas las diferentes estaciones de mantenerse al día con sus pedidos.</p><p>Descarga <strong>Papas Pancakeria HD</strong>&nbsp;para Android gratis apk en LOMUCHACHOgames y haz los mejores panqueques.</p><p>Mas cosas acerca de <strong>Papas Pancakeria HD</strong> para Android gratis:</p><ul><li>Toneladas de muebles y ropa para decorar su tienda</li><li>90 pegatinas de colores para ganar</li><li>Más de 75 ingredientes para desbloquear</li><li>12 días de fiesta separados para desbloquear</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';