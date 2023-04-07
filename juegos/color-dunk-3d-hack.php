<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Color Dunk 3D HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0 o +";
$texto = "<p>En Color Dunk 3D HACK para Android deberás encestar la mayor cantidad de balones en los aros para continuar y seguir los niveles.</p>

<p>Pasa por cientos de mapas, compra millones de bolas diferentes y mete la pelota de basquet en diferentes aros.</p>

<p>Descargar <strong>Color Dunk 3D HACK </strong>apk mod para Android en LOMUCHACOgames y encesta esas pelotas.</p>";
include_once '../templates/game/v1.php';