<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Pizzeria HD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Usted estará ocupado en la pizzería como desbloquear una amplia gama de ingredientes, costras y salsas para pizzas nuevas estacionales, así como de todos los tiempos clásicos ingredientes.</p><p>Cada estación en el restaurante es un proceso práctico, y que tendrá que realizar varias tareas entre todas las diferentes estaciones de mantenerse al día con sus pedidos de pizza.</p><p>Descarga <strong>Papas Pizzeria HD</strong>&nbsp;para Android gratis apk en LOMUCHACHOgames y haz las mejores pizzas.</p><p>Mas cosas acerca de <strong>Papas Pizzeria HD</strong> para Android gratis:</p><ul><li>90 pegatinas de colores para ganar</li><li>109 clientes para servir a las órdenes únicas</li><li>Más de 95 ingredientes para desbloquear</li><li>Utilizar etiquetas para desbloquear nuevos trajes para sus clientes</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';