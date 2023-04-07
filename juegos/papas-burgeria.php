<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Burgeria'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Tendrás que tomar los pedidos, hamburguesas parrilla, añadir ingredientes, y servir las hamburguesas a todos sus clientes extravagantes.</p><p>Mantenga contentos a sus clientes para ganar más puntos y subir de nivel! A medida que su nivel aumenta, podrás desbloquear nuevos ingredientes en la tienda, y los nuevos clientes comenzará visitando la Burgeria!</p><p>Descarga <strong>Papas Burgeria</strong>&nbsp;para Android gratis apk en LOMUCHACHOgames y haz las mejores hamburguesas.</p><p>Mas cosas acerca de Papas Burgeria para Android gratis:</p><ul><li>Más de 60 clientes para desbloquear</li><li>Multi-tarea entre la parrilla, apilamiento y servir</li><li>Varias mejoras y sombreros</li><li>Actualización y remasterizado</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';