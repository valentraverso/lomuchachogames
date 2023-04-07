<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Plague Inc. HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Plague Inc. HACKEADO es una mezcla única de estrategia y simulación terroríficamente realista. Esta enfermedad acaba de infectar al paciente. Ahora tu misión es extinguir a la humanidad propagando una epidemia letal mientras saboteas los esfuerzos de la población para combatirla.</p><p>Debes saber muy bien que&nbsp;Plague Inc. HACK es un grandioso juego de simulación sobre enfermedades mortales que tu mismo podrás crearlas a tu gusto.</p><p>Descarga <strong>Plague Inc. HACK</strong>&nbsp;para Android en LOMUCHACHOgames y destruye el mundo con esta característica mortal.</p><p>Lo que trae el Plague Inc. HACK:</p><ul><li>DNA Infinito</li><li>Función de guardado/carga completa</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';