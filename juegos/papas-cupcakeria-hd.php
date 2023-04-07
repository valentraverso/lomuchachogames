<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Cupcakeria HD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Cupcakeria Papa ha abierto en la pintoresca ciudad de Frostfield, y tú eres el encargado de hornear y decorar pasteles en la tienda! Su forma de trabajo a través de todas las fiestas del año, y dominar las cuatro estaciones del restaurante para convertirse en un maestro de la artesanía de la magdalena.</p><p>Tendrá que realizar múltiples tareas para manejar todas las áreas separadas del restaurante, y cada paso es un proceso práctico.</p><p>Descarga <strong>Papas Cupcakeria HD</strong>&nbsp;para Android gratis apk en LOMUCHACHOgames y haz los mejores alimentos.</p><p>Mas cosas acerca de Papa's Cupcakeria HD para Android gratis:</p><ul><li>96 clientes para servir a las órdenes singulares</li><li>Más de 115 ingredientes para desbloquear</li><li>12 días de fiesta separados para desbloquear</li><li>90 Logros del juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';