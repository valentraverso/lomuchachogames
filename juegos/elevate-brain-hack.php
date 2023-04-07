
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Elevate Brain HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$mediafireapk = $fila['mediafire apk'];
$megaapk = $fila['mega apk'];
if(!empty($fila['mediafire obb'])){
    $mediafire = $fila['mediafire obb'];
}
if(!empty($fila['mega obb'])){
    $mega = $fila['mega obb'];
}
$mediafireobb = '';
$megaobb = '';
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$creator = $fila['creador'];
$texto = "<p>Elevate es un programa de entrenamiento cerebral diseñado para mejorar tu expresión oral, atención, velocidad de procesamiento, memoria, habilidades en matemáticas, y más. Cada persona recibe su propio programa de entrenamiento personalizado que se adapta con el tiempo para maximizar los resultados.</p><p>Cuanto más entrenas con Elevate, más mejorarás tus habilidades cognitivas cruciales, diseñadas para aumentar tu productividad, tu poder adquisitivo, y la confianza en tu mismo.</p><p>Descarga&nbsp;<strong>Elevate Brain HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y resuelve todo.</p>";
$info = "<p><strong>Elevate Brain HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.0 o +";
$edad = "Todos";
$title = "Descarga Elevate Brain HACK APK GRATIS para Android APK full.";
$description = "Descarga Elevate Brain HACK APK GRATIS para Android APK full. Elevate Brain HACK gratis y sin virus para Android.";
$key = "Elevate Brain HACK, Elevate Brain HACK APK, Brain, Elevate Brain HACK GRATIS, Elevate Brain HACK Android, Descargar Elevate Brain HACK,";
$tags = '<b>Estrategia</b><b>Rol</b>';
include_once '../plantillas/partall.php';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';