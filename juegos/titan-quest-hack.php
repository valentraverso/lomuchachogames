<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Titan Quest HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0 o +";
$texto = "<p>Lanzado originalmente para PC en 2006, Titan Quest es un juego de rol y acción con ambientación mitológica. Los titanes han escapado de prisión y están empeñados en destruir la Tierra.</p>

<p>Los dioses no pueden detenerlos solos: hace falta un héroe que lidere esta lucha épica. La victoria o la derrota determinarán el destino de la humanidad y de los habitantes del Olimpo.</p>

<p>Descargar<strong> Titan Quest HACK </strong>apk gratis para Android en LOMUCHACHOgames y gana todo.</p>";
include_once '../templates/game/v1.php';