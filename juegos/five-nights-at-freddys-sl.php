<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Five Nights at Freddys: SL'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>Bienvenido a Pizza World del Circo del bebé, donde la diversión familiar y la interactividad van más allá de cualquier cosa que hayas visto en esos otros lugares de pizza! Ahora contratación: Técnico de la noche. Debe disfrutar de espacios reducidos y se sienten cómodos alrededor de una máquina activa. No es responsable de la muerte o desmembramiento.</p><p>Cinco noches en la hermana de Freddy ubicación es la quinta entrega de las cinco noches en serie de Freddy, con nuevos personajes, nuevos lugares y nuevos terrores.</p><p>Descarga&nbsp;<strong>Five Nights at Freddys: SL</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y disfruta de la 5ta entrega de Five Nights at Freddys.</p><p><strong>Five Nights at Freddys: SL</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Características de las cinco noches desde el juego de PC.</li><li>Incluye la Noche de encargo.</li><li>Baby \"muerte\" mini-juego.</li><li>Menú completo Extras.</li><li>Ambas terminaciones disponibles.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';