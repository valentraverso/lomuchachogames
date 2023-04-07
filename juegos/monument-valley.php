<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Monument Valley'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>En Monument Valley, debes manipular arquitecturas imposibles y guiar a una princesa silenciosa por un mundo de belleza incomparable.<br>Monument Valley es un viaje irreal por construcciones fantásticas y geometrías imposibles. Guía a la silenciosa princesa Ida por monumentos misteriosos, descubre senderos ocultos, revela ilusiones ópticas y burla a los enigmáticos Hombres Cuervo.</p><p>Descarga <strong>Monument Valley</strong> apk + obb gratis y sumergete en una aventura donde debes manipular objetos gigantes y guiar a una princesa por un mundo que te dara vuelta la cabeza.</p><p>Te dejamos mas información sobre Monument Valley para Android:</p><ul><li>PRECIOSO</li><li>FÁCIL DE USAR</li><li>SONIDO</li></ul>";
include_once '../templates/game/v1.php';