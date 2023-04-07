<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Scooperia To Go!'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Usted ha perdido su dinero y sus pertenencias mientras que en un viaje de turismo a la gran ciudad, pero Papa Louie está aquí para ayudar</p><p>Tendrá que realizar múltiples tareas entre cada área del restaurante, mantenga contentos a sus clientes para ganar puntos y subir de nivel.</p><p>Descarga <strong>Papas Scooperia To Go!</strong>&nbsp;para Android gratis apk en LOMUCHACHOgames y haz los mejores helados.</p><p>Mas cosas acerca de Papas Scooperia To Go! para Android gratis:</p><ul><li>Multi-tarea entre la fabricación de galletas</li><li>116 clientes para servir a las órdenes únicas</li><li>Toneladas de muebles y ropa para decorar su tienda</li><li>90 pegatinas de colores de ganar</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';