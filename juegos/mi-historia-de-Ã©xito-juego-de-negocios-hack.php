
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Mi historia de éxito juego de negocios HACK'";
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
$texto = "<p>Alcanza todos tus objetivos por tus propios medios: consigue tu primer trabajo, alquila un apartamento y comienza a ascender en la pirámide laboral. Ahorra dinero para fundar tu propio negocio.</p><p>Conviértete en un exitoso empresario, gana millones de dólares y dirige tu propia empresa en \"Mi historia de éxito juego de negocios\".</p><p>Descarga&nbsp;<strong>Mi historia de éxito juego de negocios HACK</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y se el mas rico del planeta.</p>";
$info = "<p><strong>Mi historia de éxito juego de negocios HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Encuentra un trabajo para alquilar tu primer apartamento.</li><li>Acaba tus estudios en la universidad para llegar más alto.</li><li>Cásate y forma una familia para mejorar tu posición en la sociedad.</li></ul>";
$versiondispositivo = "4.1 o +";
$edad = "+15";
$title = "Descarga Mi historia de éxito HACK APK GRATIS para Android MOD full.";
$description = "Descarga Mi historia de éxito juego de negocios HACK APK GRATIS para Android APK full. Mi historia de éxito MOD gratis y sin virus para Android.";
$key = "Mi historia de éxito HACK, Mi historia de éxito HACK APK, Money, Mi historia de éxito HACK GRATIS, Mi historia de éxito Android, Descargar Mi historia de éxito,";
$tags = '<b>Simulacion</b><b>Rol</b>';
include_once '../plantillas/partall.php';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';