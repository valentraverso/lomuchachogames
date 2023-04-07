<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Pizzeria To Go!'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Mantenga contentos a sus clientes para ganar más puntos y subir de nivel. A medida que su nivel aumenta, podrás desbloquear nuevos ingredientes en la tienda, y los nuevos clientes comenzará visitando la pizzería.</p><p>Tendrá que realizar múltiples tareas entre cada zona de la pizzería, con nuevos controles diseñados para funcionar a la perfección en la palma de tu mano y dirígete a la estación para poder observar a los clientes que esperaban.</p><p>Descarga <strong>Papas Pizzeria To Go!</strong>&nbsp;para Android gratis apk en LOMUCHACHOgames y haz las mejores pizzas.</p><p>Mas cosas acerca de <strong>Papas Pizzeria To Go!</strong> para Android gratis:</p><ul><li>90 clientes para desbloquear las órdenes</li><li>75 Logros en el juego para ganar</li><li>Nuevo Lobby Editor para personalizar y decorar su tienda</li><li>La tienda para comprar mejoras, muebles y carteles con sus consejos en el juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';