<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'VSCO X Premium'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>VSCO es un lugar donde te puedes expresar, hacer bonitas fotos y vídeos, y conectarte a una comunidad creativa. Edita tus imágenes con varios preajustes y herramientas para móvil y explora contenido original de creadores de todo el mundo. Accede a la biblioteca completa de preajustes de VSCO, que incluye más de 200 preajustes. Recrea el aspecto retro de Kodak, Fuji, Agfa y otros con Film X.&nbsp;</p><p>Explora los inspiradores consejos, trucos y manuales hechos especialmente para miembros de Discover<br>Comparte tu trabajo y consigue una oportunidad para exponer en VSCO.</p><p>Descarga&nbsp;<strong>VSCO X&nbsp;Premium </strong>apk ultima version&nbsp;en LOMUCHACHOgames y vive el mundo de la fotografía a pleno.</p><p><strong>VSCO X&nbsp;Premium</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Edita tus imágenes con 10 preajustes VSCO.</li><li>Utiliza herramientas de edición básicas, como Contraste, Saturación y Grano.</li><li>Encuentra la inspiración con las fotos y artículos de Discover.</li><li>Comparte tus fotos y consigue una oportunidad para exponer en VSCO.<br>&nbsp;</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';