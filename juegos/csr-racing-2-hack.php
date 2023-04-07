<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'CSR Racing 2 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>CSR 2 establece un nuevo estándar gráfico con este juego hiperrealista. Es un festival automovilístico en la palma de tu mano.</p><p>Compite con tus supercoches personalizados, como el LaFerrari, el McLaren P1, el Koenigsegg One:1 y muchos otros. Modifica tus coches y domina la competición en los eventos de equipo globales. Prueba los mejores coches del mundo. Descarga gratis el mejor juego de carreras, comienza tu colección de supercoches y quema rueda.</p><p>Descarga <strong>CSR Racing 2 HACK&nbsp;</strong>apk y obb gratis en LOMUCHACHOgames y y sorprende a todos los corredores.</p><p>Lo que trae CSR Racing 2 HACK para android:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once '../templates/game/v1.php';