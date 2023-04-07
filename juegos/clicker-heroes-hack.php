<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Clicker Heroes HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "3.0 o +";
$texto = "<p>Comienza tu misión y embácarte en una aventura sencilla pero increíblemente divertida. Toca para matar a los monstruos y contrata y mejora héroes para desbloquear sus habilidades únicas. ¡Acaba con todas las criaturas, encuentra los tesoros y explora nuevos mundos en esta aventura épica! Además, hemos añadido nuevos contenidos: ahora puedes unirte a otros jugadores en clanes para derrotar a los poderosos Inmortales.</p><p>Descarga <strong>Clicker Heroes HACK&nbsp;</strong>apk en LOMUCHACHOgames y disfruta la aventura.</p><p>Lo que trae Clicker Heroes HACK:</p><ul><li>Rubies Ilimitado</li></ul>";
include_once '../templates/game/v1.php';