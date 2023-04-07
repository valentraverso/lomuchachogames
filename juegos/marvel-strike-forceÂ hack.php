
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Marvel Strike Force HACK'";
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
$texto = "<p>Entra al mundo de MARVEL Strike Force 3.8.2 donde se desenvolvelvera un lucha de aliados contra archienimigos en un juego para android lleno de acción. La tierra esta siendo atacada y nuestros heroes se han aliado para salvarla.</p><p>Reune a tu equipo de villanos y superheroes para poder salvar al mundo de sus atacantes que quieren deshacerse de nuestro planeta.</p><p>Descargar&nbsp;<strong>Marvel Strike Force&nbsp;HACK </strong>3.8.2 APK para Android en LOMUCHACHOgames y ayuda a tus personajes favoritos de Marvel.</p>";
$info = "<p>Lo que trae <strong>Marvel Strike Force&nbsp;HACK</strong> apk para android:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.4 o +";
$edad = "+17";
$title = "Descarga Marvel Strike Force HACK APK GRATIS para Android APK full.";
$description = "Descarga Marvel Strike Force HACK APK GRATIS para Android APK full. Marvel Strike Force HACK gratis y sin virus para Android.";
$key = "Marvel Strike Force HACK, Marvel Strike Force HACK APK, Iron Man, Marvel Strike Force HACK GRATIS, Marvel Strike Force Android, Descargar Marvel Strike Force,";
$tags = '<b>Casual</b><b>Rol</b>';
include_once '../plantillas/partall.php';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';