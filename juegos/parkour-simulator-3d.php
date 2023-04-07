<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Parkour Simulator 3D'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Esquiva con giros a derecha o a izquierda para evitar los obstáculos en esta carrera mortal.<br>Salta por arriba o por debajo de los que bajo de los obstáculos que no pueden ser evitados.<br>Da un salto de altura para escalar.<br>Da un salto de longitud para saltar encima de un hueco.</p><p>Descarga <strong>Parkour Simulator 3D&nbsp;</strong>apk y obb gratis en LOMUCHACHOgames y recorre todo lo que puedas.</p><p>Lo que trae Parkour Simulator 3D gratis:</p><ul><li>Un de los más asombrosos corredores de parkour con mandos simples</li><li>Verdaderos trucos de parkour</li><li>Sorprendentes animaciones que le dan muchas emociones toxicas</li><li>Una interminable en esta carrera mortal por la calle</li></ul>";
include_once '../templates/game/v1.php';