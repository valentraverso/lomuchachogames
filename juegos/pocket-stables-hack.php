<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Pocket Stables HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3.3 o +";
$texto = "<p>Construir instalaciones de formación como cursos de tierra y piscinas en los parajes naturales de su rancho.</p><p>Aumentar la fama de su rancho y atraer a los visitantes a pasar un poco de pasta en las comodidades de su rancho, como puestos de helados y tiendas de regalos.</p><p>Descargar<strong>&nbsp;Pocket Stables HACK&nbsp;</strong>apk gratis para Android en LOMUCHACHOgames y Administrar su propio rancho, mientras que la formación de sus caballos de carreras para ganar en grande en emocionantes carreras.</p><p>Pocket Stables HACK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once '../templates/game/v1.php';