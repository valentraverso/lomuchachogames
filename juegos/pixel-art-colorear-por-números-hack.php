<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Pixel Art: Colorear por números HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.3 o +";
$texto = "<p>Para alejar tu estrés, colorea por número. Descubre toneladas de obras de arte GRATUITAS en 2D y 3D o crea tu propio arte de píxel. Colorea por número. Relájate.</p><p>Descarga <strong>Pixel Art: Colorear por números HACK&nbsp;</strong>apk en LOMUCHACHOgames y colorea a lo mas grande.</p><p>Lo que trae Pixel Art: Colorear por números HACK:</p><ul><li>Premium</li></ul>";
include_once '../templates/game/v1.php';