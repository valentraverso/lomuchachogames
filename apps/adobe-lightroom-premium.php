<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Adobe Lightroom Premium'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Adobe Lightroom Premium es un servicio de edición de fotos potente, intuitivo y gratuito como ya sabes lightroom te permite crear magníficas fotografías y crecer como fotógrafo, haz cambios espectaculares en tus fotos con un solo toque en el editor, haz milagros con solo un toque para aplicar cambios de gran impacto visual en tus ediciones, realiza ediciones avanzadas para cambiar el color, la exposición, el tono y el contraste, tambien ajusta y retoca los colores de la fotografía para resaltarlos, da vida a tus ediciones de fotos con estas herramientas sin igual en el sector, déjate inspirar y aprende a realizar las ediciones de fotos que deseas superando cada una de las lecciones detalladas dirigidas por otros fotógrafos como tú, revela el potencial de tu teléfono con controles únicos.&nbsp;</p><p>Define la exposición, el temporizador, los ajustes preestablecidos de instantáneas y mucho más, saca fotografías más detalladas con los modos de captura avanzada, como RAW, profesional y HDR*, emplea carpetas, álbumes, clasificaciones de estrellas e indicadores para destacar tus mejores fotos.</p><p>Descarga&nbsp;<strong>Adobe Lightroom Premium</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y edita de la mejor manera.</p><p><strong>Adobe Lightroom Premium</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD Premium</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';