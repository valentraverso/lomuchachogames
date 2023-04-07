<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Fallout Shelter MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Construye un mañana mejor… ¡bajo tierra! Elige entre un amplio abanico de modernas salas con las que convertir un pozo bajo medio kilómetro de roca maciza en el ejemplo perfecto de la vida en un refugio.</p><p>Familiarízate con los moradores de tu refugio y lidéralos hacia un mañana feliz. Da con el trabajo idóneo para ellos y contempla cómo prosperan. Entrénalos y dótalos de trajes y armas para mejorar así sus capacidades.</p><p>Descarga&nbsp;<strong>Fallout Shelter MOD</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y protege a todos.</p>";
$info = "<p><strong>Fallout Shelter MOD</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero Ilimitado</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "MOD";
include_once '../templates/game/v1.php';