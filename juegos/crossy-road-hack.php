<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Crossy Road HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>¿Por qué cruzó la calle la gallina?<br>¿Por qué la paloma dejó ESO allí?<br>¿Por qué el marciano 115 abdujo esa vaca?<br>¿Por qué el unicornio se comió todas esas golosinas?<br>Crossy Road es el saltarín incansable de los videojuegos que no querrás dejar jamás.</p><p>Descarga <strong>Crossy Road HACK&nbsp;</strong>apk en LOMUCHACHOgames y cruza lo mas rapido posible.</p><p>Lo que trae Crossy Road HACK:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once '../templates/game/v1.php';