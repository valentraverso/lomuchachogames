<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'SimCity BuildIt HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>Conviértete en el héroe de tu propia ciudad mientras diseñas y creas una metrópolis llena de vida. Tú tomas todas las decisiones a medida que tu ciudad se hace más grande y compleja.</p>

<p>Hazlo con cabeza para hacer felices a tus ciudadanos y mantener el crecimiento de tus rascacielos. Luego comercia, chatea, compite y únete a clubes con alcaldes amigos.</p>

<p>Descargar<strong> SimCity BuildIt HACK </strong>apk gratis para Android en LOMUCHACHOgames y construye la ciudad más extraordinaria.</p>";
include_once '../templates/game/v1.php';