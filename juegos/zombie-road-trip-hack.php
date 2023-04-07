<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Zombie Road Trip HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>Atropella a las incansables hordas de zombies que te irás encontrando en los grandes páramos de este juego sin fin. Dispara a los zombies haciendo uso de todo tu arsenal de armas y presencia multitud de escenas gore de destrucción.</p><p>Descarga <strong>Zombie Road Trip HACK&nbsp;</strong>apk en LOMUCHACHOgames y diviertete.</p><p>Lo que trae Zombie Road Trip HACK:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once '../templates/game/v1.php';