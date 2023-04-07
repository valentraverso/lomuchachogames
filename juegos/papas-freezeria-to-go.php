<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Freezeria To Go'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Acabas de empezar un trabajo de verano de relax en una heladería frente al mar, pero las cosas se ponen dificiles cuando todos los clientes de Papa Louie llegan a la isla.</p><p>Tendrá que realizar múltiples tareas entre cada área del restaurante, mantenga contentos a sus clientes para ganar puntos y subir de nivel.</p><p>Descarga <strong>Papas Freezeria To Go!</strong>&nbsp;para Android gratis apk en LOMUCHACHOgames y haz los mejores helados.</p><p>Mas cosas acerca de <strong>Papas Freezeria To Go!</strong> para Android gratis:</p><ul><li>Realizar varias tareas</li><li>Desafiando Closers y crítico gastronómico</li><li>120 logros en el juego para ganar</li><li>85 clientes para desbloquear las órdenes</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';