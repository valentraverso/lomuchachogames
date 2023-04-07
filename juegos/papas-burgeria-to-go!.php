<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Burgeria To Go!'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Uno se queda a cargo de la famosa Burgeria Papa Louie, donde usted aprenderá a tomar órdenes, hamburguesas parrilla, agregar los ingredientes y servir hamburguesas a todos sus clientes locos.</p><p>Mantenga contentos a sus clientes para ganar más puntos y subir de nivel. A medida que su nivel aumenta, podrás desbloquear nuevos ingredientes en la tienda, y los nuevos clientes comenzará visitando la Burgeria</p><p>Descarga <strong>Papas Burgeria To Go!</strong>&nbsp;para Android gratis apk en LOMUCHACHOgames y haz las mejores hamburguesas.</p><p>Mas cosas acerca de Papas Burgeria To Go! para Android gratis:</p><ul><li>Realizar varias tareas entre la parrilla</li><li>Más de 60 clientes para desbloquear</li><li>Más de 50 logros en el juego</li><li>Todos los nuevos controles</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';