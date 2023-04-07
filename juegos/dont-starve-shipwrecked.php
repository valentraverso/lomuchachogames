<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Dont Starve: Shipwrecked'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Metete en la vida de Wilson quien a naufragado hasta un archipiélago tropical. Pero hay un solo problema, deberas volver a aprender a sobrevivir en este lugar rodeado por olas donde moustros nocturnos trataran de matarte.</p><p>Busca materiales y comida para crear un lugar donde vivir, no te enloquezcas y piensa cada movimiento que hagas porque este puede ser letal. Ya sabes la única forma de sobrevivir en Dont Starve apk + datos obb para android es comiendo.</p><p>Descarga&nbsp;<strong>Don't Starve: Shipwrecked</strong>&nbsp;para Android gratis en LOMUCHACHOgames y senti feo que es naufragar en esta isla.</p><p>Mas cosas sobre Don't Starve: Shipwrecked :</p><ul><li>Navega mar abierto.</li><li>Nuevas estaciones</li><li>Explora un mundo totalmente diferente y lleno de aventuras</li><li>Mas cosas para fabricar y divertirte</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';