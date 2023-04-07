<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Tap Tycoon'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.3 o +";
$texto = "<p>Toque para crear dinero de la nada y ganar suficiente dinero para invertir en sus negocios. Da forma a tu conglomerado multi-industria mediante la construcción y mejora de sus negocios.</p><p>Haz mucho dinero y mejora toda tu produccion, llena tus bolsillos de dinero y vuelve feliz a casa.</p><p>Descarga <strong>Tap Tycoon </strong>gratis para Android en LOMUCHACHOgames y hazte millonario.</p><p>Lo que trae el Tap Tycoon:</p><ul><li>Haz dinero a montones</li><li>Toca sin para la pantalla.</li></ul>";
include_once '../templates/game/v1.php';