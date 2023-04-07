<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'TOP SEED Tennis Manager 2020 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Descarga TOP SEED Tennis Manager 2019 HACK para Android en LOMUCHACHOgames y haz lo mejor en cada partido.</p><p>Gestiona la carrera de un joven y prometedor jugador de tenis y llévalo a la gloria. Participa en el circuito de tenis profesional y lucha torneo tras torneo para avanzar en la clasificación. Entrena duro . Sigue entrenando para progresar en tu carrera y convertirte en el mejor.</p><p>Descarga <strong>TOP SEED Tennis Manager 2019 HACK</strong>&nbsp;para Android en LOMUCHACHOgames y gana todo lo que puedas mejorando a tu jugador.</p><p>Lo que trae el TOP SEED Tennis Manager 2019 HACK:</p><ul><li>Dinero Ilimitado</li><li>Oro Ilimitado</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';