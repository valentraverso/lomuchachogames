<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Hot Doggeria To Go!'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>Tendrá que realizar múltiples tareas entre cuatro zonas del puesto de perritos calientes, con nuevos controles diseñados para funcionar a la perfección en la palma de su mano.</p><p>Mantener contentos a sus clientes para ganar más puntos y subir de nivel. A medida que su nivel aumenta, podrás desbloquear nuevos ingredientes para la tienda, y los nuevos clientes comenzará a visitar el stand de perro caliente.</p><p>Descarga <strong>Papas Hot Doggeria To Go!&nbsp;</strong>para Android gratis apk en LOMUCHACHOgames y haz los mejores hot dogs.</p><p>Mas cosas acerca de <strong>Papas Hot Doggeria To Go!</strong> para Android gratis:</p><ul><li>12 días de fiesta separados para desbloquear</li><li>112 clientes para desbloquear</li><li>108 logros en el juego</li><li>Gane 40 y dominar únicas recetas especiales</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';