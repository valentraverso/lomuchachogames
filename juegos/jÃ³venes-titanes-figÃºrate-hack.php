
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Jóvenes titanes Figúrate HACK'";
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
$texto = "<p>Alguien está tratando de llevar a la quiebra a los Minititanes. Empieza a ganar batallas para llegar al fondo de este misterio. Llegó la versión beta del modo multijugador.&nbsp;</p><p>Ya te enfrentaste a los héroes más grandes del mundo. Ahora, ¡puedes desafiar a tus amigos y enfrentarlos en minibatallas! Sube de rango para desbloquear las figuras de la Legión del Mal. Busca más de 90 figuras de los Minititanes, como Batman, Superman, la Mujer Maravilla, Flash, los Titanes Radicales.</p><p>Descarga&nbsp;<strong>Jóvenes titanes Figúrate HACK</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y sal victorioso de la batallas.</p>";
$info = "<p><strong>Jóvenes titanes Figúrate HACK</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>DESAFÍA A TUS AMIGOS</li><li>MÁS DE 90 FIGURAS PARA COLECCIONAR</li><li>PERSONALIZA TU EQUIPO</li></ul>";
$versiondispositivo = "5.1 o +";
$edad = "+10";
$title = "Descarga Jóvenes titanes Figúrate HACK APK + OBB GRATIS para Android";
$description = "Descarga Jóvenes titanes Figúrate HACK APK + OBB GRATIS para Android APK full. Jóvenes titanes Figúrate HACK gratis y sin virus para Android.";
$key = "Jóvenes titanes Figúrate HACK, Jóvenes titanes Figúrate APK + OBB, Titans, Jóvenes titanes GRATIS, Jóvenes titanes Android, Descargar Jóvenes titanes Figúrate,";
$tags = '<b>Accion</b><b>Rol</b>';
include_once '../plantillas/partall.php';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';