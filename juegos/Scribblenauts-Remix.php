
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Scribblenauts Remix'";
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
$mediafireobb = '<div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;" rel="external nofollow" href="' . $mediafire . '" id="mediafireapk">OBB Mediafire</a>
        </div>';
$megaobb = '<div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;"  rel="external nofollow" href="' . $mega . '" id="megaapk">OBB Mega</a>
        </div>';
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$creator = $fila['creador'];
$texto = "<p>En Scribblenauts Remix para Android, ayuda Maxwell adquirir el Starite mediante la creación de cualquier objeto, darle vida y utilizarlo para resolver cada desafío.<p/>
<p>Deje volar su imaginación en este juego de puzzle innovador. Convocar a la vida a ', coche alado colosal' o una ', heladas respiración, hipopótamo robótico tímido'! Si usted puede pensar, puede crearlo.<p/>
<p>Descargar <strong>Scribblenauts Remix </strong>para Android APK + OBB gratis en LOMUCHACHOgames y deja que tu imaginación decida que hacer.</p>";
$info = "<p>Scribblenauts Remix APK + OBB Android es un  juego de puzles que te da mucha libertad para que hagas y pases los niveles como quieras y con los objetos que quieras. ¡El mundo que vas a atravesar es muy amplio, por eso vas a tener que prepararte para la aventura!</p>";
$versiondispositivo = "2.3.3 o +";
$edad = "Todos";
$title = "Descarga Scribblenauts Remix APK + OBB GRATIS para Android - LOMUCHACHOgames";
$description = "Descarga Scribblenauts Remix APK + OBB para Android GRATIS en español, entra a LOMUCHACHOgames y descarga juegos gratis.";
$key = "Scribblenauts Remix, Warner Bros. International Enterprises, Android,";
$tags = '<b>Estrategia</b><b>Simulacion</b>';
include_once '../plantillas/partall.php';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';