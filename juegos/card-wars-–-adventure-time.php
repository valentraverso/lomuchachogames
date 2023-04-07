<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Card Wars – Adventure Time'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.3.3 o +";
$texto = "<p>Bienvenido al mundo de Adventure Time y a su magico juegos de cartas que siempre quisiste jugar mientras veias la tele: Card Wars. Descarga Card Wars para Android, el juegos favorito de Jake, en LOMUCHACHOgames.</p><p>Como puede que hayas visto en&nbsp;Hora de Aventuras, las épicas batallas de&nbsp;Card Wars&nbsp;tienen lugar en un área de juego dividida en cuatro Carriles. El objetivo del juego es dañar a tu oponente hasta que sus Puntos de Vida, que empiezan en 25, lleguen a 0<i>.&nbsp;</i> Y si lo logras dominaras en Card Wars.</p><p>Descargar <strong>Card Wars - Adventure Time </strong>de Cartoon Network GRATIS ultima versión para Android en LOMUCHACHOgames y pelea contra todos los enemigos de Fynn y Jake.</p><p>¿Queres saber mas sobre Card Wars?:</p><ul><li>LUCHA CON CRIATURAS ÉPICAS</li><li>ACCIÓN MULTIJUGADOR</li><li>LABORATORIO DE CRIATURAS</li><li>ESCOGE A TU HÉROE</li><li>EVENTOS ESPECIALES</li></ul>";
include_once '../templates/game/v1.php';