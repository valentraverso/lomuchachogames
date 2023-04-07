<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Zombie Tsunami HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Ataca la ciudad con una horda de zombies. Transforma peatones en zombies y crea la horda más grande existente.<br>Cómete a tus amigos y desafíalos a una loca carrera basada en destruir todo lo que encuentren en el camino.</p><p>Descarga <strong>Zombie Tsunami HACK&nbsp;</strong>apk en LOMUCHACHOgames y alimentate de humanos.</p><p>Lo que trae Zombie Tsunami HACK:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once '../templates/game/v1.php';