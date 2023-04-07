<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Shiny Ski Resort'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>En Shiny Ski Resort crea tu hotel y atrae a millones de turistas que quieren ir a hacer snowboarding en tus lujosas pistas deportivas de nieve.</p>

<p>Haz que tu hotel popular, y su curso de esquí se beneficiará también! Además, usted se convierte en capaz de hacer productos para vender en las tiendas y restaurantes del hotel. Contrata profesionales para que lleven el hotel a otro nivel y ten a todos tus clientes satisfechos.</p>

<p>Descargar <strong>Shiny Ski Resort </strong>apk gratis para Android en LOMUCHACHOgames y crea tu resort de ski.</p>";
include_once '../templates/game/v1.php';