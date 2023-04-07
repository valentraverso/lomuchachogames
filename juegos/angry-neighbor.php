<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Angry Neighbor'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Explora la casa del vecino y resolver su misterio<br>Un vecino ha sido siempre una persona especial, y que se ocultó en mi casa que sentir curiosidad y que ir a su casa, pero en lugar de descubrir que empieza a coger usted, evitar las trampas y el propio vecino explorar la casa.</p><p>Descarga <strong>Angry Neighbor&nbsp;</strong>apk en LOMUCHACHOgames y descubre el secreto de tu vecino.</p><p>Lo que trae Angry Neighbor:</p><ul><li>Bueno gráficos 3D optimizados para dispositivos móviles</li><li>El bien y el buen gobierno</li><li>Total libertad de acción</li></ul>";
include_once '../templates/game/v1.php';