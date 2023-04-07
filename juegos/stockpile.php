<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Stockpile'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>COTTAGE GARDEN: un colorido jardín con muros, sendas y arbustos.</p>
<p>Sois jardineros ambiciosos y os enfrentáis al desafío de llenar todos los maceteros de vuestro jardín con plantas; las limitaciones de espacio os inspirarán para crear constantemente nuevas composiciones.</p>
<p>Descarga <strong>Stockpile</strong> apk ultima version en LOMUCHACHOgames y gana la partida</p>";
include_once '../templates/game/v1.php';