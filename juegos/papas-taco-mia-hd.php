<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Taco Mia HD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Usted estará ocupado en la tienda de tacos como desbloquear una amplia gama de ingredientes para los nuevos tacos de temporada, y servir recetas especiales a sus clientes para ganar una variedad de grandes bonos.</p><p>Cada estación en la tienda de tacos es un proceso práctico, y que tendrá que realizar varias tareas entre todas las diferentes estaciones de mantenerse al día con sus pedidos.</p><p>Descarga <strong>Papas Taco Mia HD</strong>&nbsp;para Android gratis apk en LOMUCHACHOgames y haz los mejores tacos.</p><p>Mas cosas acerca de <strong>Papas Taco Mia HD</strong> para Android gratis:</p><ul><li>Gane 40 y dominar únicas recetas especiales</li><li>12 días de fiesta separados para desbloquear</li><li>90 pegatinas de colores para ganar</li><li>101 clientes para servir a las órdenes únicas</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';