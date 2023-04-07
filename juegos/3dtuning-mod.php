<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = '3DTuning MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Gran selección de coches, diseño y ajuste opciones exteriores. Nuevos modelos de automóviles. Marca, así coches más populares del siglo 20 y 21. Colección única de ruedas, paragolpes delantero y trasero, parrillas, faros y luces traseras, alerones, defensas, espejos, así como una variedad de tomas de aire y mucho más.&nbsp;</p><p>Las características disponibles incluyen cambio exterior de color, personalización nivel de suspensión, pinturas de automóviles y muchos más. La aplicación se integra con 3DTuning.com, por lo que su garaje único coche está siempre a su disposición, mientras que las actualizaciones del sitio constantes y frecuentes están disponibles inmediatamente en sus dispositivos móviles.</p><p>Descarga&nbsp;<strong>3DTuning MOD</strong>&nbsp;apk en su ultima version para Android&nbsp;en LOMUCHACHOgames y crea y comparte tu garaje de coches únicos con los proyectos de ajuste individuales</p>";
$info = "<p><strong>3DTuning MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.0 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';