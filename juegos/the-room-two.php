<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'The Room Two'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o ";
$texto = "<p>Entra a la habitación de The Room Two y sumergite en un rompecabezas interactivo envuelto en un misterio, todo este puzzle dentro de un maravilloso mundo 3D creado para jugar con tu mente y hacer que esta se confunda.</p>
<p>Sigue el rastro de las crípticas cartas del enigmático científico conocido sólo como “AS” y adéntrate en un fascinante mundo de misterio y exploración.</p>

<p>Descarga <strong>The Room Two</strong> apk + datos obb gratis para Android en LOMUCHACHOgames y se parte de un misterio por resolver.</p><p>Lo que trae el The Room Two Android:</p>
<ul>
<li>Diseño PICK-UP-And-PLAY</li>
<li>Innovador control tactil escenarios realiestas en 3d</li>
<li>Sonidos inquietantes</li>
<li>Muchisimos idiomas para disfrutar del juego</li>
</ul>";
include_once '../templates/game/v1.php';