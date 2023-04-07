<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Paper.io 2'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Paper.io 2 es uno de los tantos juegos para Android adictivos de VODOO, en este tendrás un personaje con cual vas a tener que llenar la mayor cantidad de espacio  en el territorio.</p>
<p>Podes elegir el personaje que vas a llevar a la batalla, mientras mas espacio tengas en tu poder mas puntos finales tendras.</p>
<p>Descargar <strong>Paper.io 2</strong> APK para Android en LOMUCHACHOgames y conquista grandes territorios.</p><p>Descarga Paper.io 1.3.8.2 GRATiS para Android full en LOMUCHACHOgames y empeza ganar espacios para quedar primero!!</p>";
include_once '../templates/game/v1.php';