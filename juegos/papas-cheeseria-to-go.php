<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Cheeseria To Go'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Papas Cheeseria está iniciando su gran inauguración con una actuación especial de la banda de alta energía, Scarlett and the Shakers! pero desafortunadamente el concierto se cancela cuando se roban todos los equipos de música, y tendrás que buscar un trabajo para poder comprar nuevos instrumentos para la banda.&nbsp;</p><p>Te está poniendo a cargo de hacer sándwiches de queso a la parrilla en su restaurante más nuevo, tendrás que preparar sándwiches con deliciosos panes, quesos melosos y una amplia variedad de ingredientes y salsas para un queso gourmet a la parrilla. Cocine y voltee los sándwiches para asarlos a la parrilla, y termine los pedidos de sus clientes con una gran cantidad de papas fritas frescas cubiertas con sus salsas y coberturas favoritas.&nbsp;</p><p>Descarga&nbsp;<strong>Papas Cheeseria To Go</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y cocina como nunca.</p><p><strong>Papas Cheeseria To Go</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>NUEVAS CARACTERÍSTICAS</li><li>SABORES DE VACACIONES</li><li>SERVIR RECETAS ESPECIALES</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';