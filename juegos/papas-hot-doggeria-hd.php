<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Hot Doggeria HD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Cada estación en el restaurante es un proceso práctico, y que tendrá que realizar múltiples tareas para mantenerse al día con sus pedidos. Mantener a los fans plena y feliz, alegría a su equipo favorito, e incluso tomar un columpio en el Home Run Derby</p><p>Es el día de apertura al Griller Estadio, donde está a cargo de puesto de perritos calientes famosos de Papa Louie.</p><p>Descarga <strong>Papas Hot Doggeria HD&nbsp;</strong>para Android gratis apk en LOMUCHACHOgames y haz los mejores hot dogs.</p><p>Mas cosas acerca de <strong>Papas Hot Doggeria HD</strong> para Android gratis:</p><ul><li>111 clientes para servir a las órdenes</li><li>Más de 100 ingredientes para desbloquear</li><li>Utilizar etiquetas para desbloquear nuevos trajes</li><li>12 días de fiesta separados para desbloquear</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';