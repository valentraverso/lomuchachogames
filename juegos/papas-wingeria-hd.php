<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Wingeria HD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Sus clientes esperan una gran presentación, por lo que organizar los alimentos fritos con lados y verduras por lo que son agradables a la vista y sus estómagos.</p><p>Aunque el restaurante es conocido por sus famosas alas, también podrás desbloquear una variedad de otros tipos de carne para freír para sus clientes, así como una amplia variedad de deliciosas salsas y un montón de lados y salsas para acompañar su comida.</p><p>Descarga <strong>Papas Wingeria HD</strong>&nbsp;para Android gratis apk en LOMUCHACHOgames y haz las mejores comidas fritas.</p><p>Mas cosas acerca de <strong>Papas Wingeria HD</strong> para Android gratis:</p><ul><li>90 Logros para ganar</li><li>34 ingredientes para desbloquear</li><li>89 clientes para servir a las órdenes singulares</li><li>Cientos de muebles y complementos de vestir artículos para decorar tu tienda y trabajadores</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';