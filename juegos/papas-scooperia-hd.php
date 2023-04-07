<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Scooperia HD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Papa Louie se le ocurre una solución para ayudar a volver a sus pies: Él quiere que se quede y ejecutar su nueva tienda de helados en Oniontown.</p><p>Cada estación en el restaurante es un proceso práctico, y que tendrá que realizar varias tareas entre todas las diferentes estaciones de mantenerse al día con sus pedidos.</p><p>Descarga <strong>Papas Scooperia HD</strong>&nbsp;para Android gratis apk en LOMUCHACHOgames y haz los mejores alimentos.</p><p>Mas cosas acerca de <strong>Papas Scooperia HD</strong> para Android gratis:</p><ul><li>116 clientes para servir a las órdenes únicas</li><li>Más de 120 ingredientes para desbloquear</li><li>Toneladas de muebles y ropa para decorar su tienda y trabajadores</li><li>12 días de fiesta separados para desbloquear</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';