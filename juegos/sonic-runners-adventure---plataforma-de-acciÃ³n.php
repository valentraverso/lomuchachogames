
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Sonic Runners Adventure - Plataforma de acción'";
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
$texto = "<p>Corre con Sonic, la leyenda de la velocidad y todos sus amigos en su primer juego de plataforma para móvil del 2018. Sonic el Erizo y sus amigos regresan en un juego tipo corredor lleno de acción. Contágiate de la fiebre de la velocidad mientras revives la leyenda de Sonic. Corre, salta, pica, acelera o vuela por el camino y a través del reto de emocionantes niveles de plataforma.&nbsp;</p><p>Desbloquea nuevos personajes incluidos Tails, Knuckles y más, cada uno con sus propias habilidades que puedes potenciar. Corre a salvar el universo de Sonic luchando contra el Dr. Eggman en 4 locaciones icónicas. Todo esto en una descarga compacta, para que cualquiera pueda comenzar su día con algo de acción arcade de alta velocidad.</p><p>Descarga&nbsp;<strong>Sonic Runners Adventure - Plataforma de acción</strong>&nbsp;apk ultima versión&nbsp;en LOMUCHACHOgames y revive los viejos tiempos.</p>";
$info = "<p><strong>Sonic Runners Adventure - Plataforma de acción</strong> APK para Android es una gran opción a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Acelera por 4 lugares icónicos con increíbles gráficos.</li><li>Desbloquea toneladas de personajes como Tails, Knuckles, Shadow el Erizo y más leyendas de la velocidad, cada uno con sus súper habilidades.</li><li>Supera una oleada interminable de obstáculos y villanos, ¡incluido el perverso Dr. Eggman</li></ul>";
$versiondispositivo = "4.0.3 o +";
$edad = "Todos";
$title = "Descarga Sonic Runners Adventure APK GRATIS para Android full.";
$description = "Descarga Sonic Runners Adventure APK GRATIS para Android APK full. Sonic Runners Adventure gratis y sin virus para Android.";
$key = "Sonic Runners Adventure, Sonic Runners Adventure APK, SEGA, Sonic Runners Adventure GRATIS, Sonic Runners Adventure Android, Descargar Sonic Runners Adventure,";
$tags = '<b>Aventura</b>';
include_once '../plantillas/partall.php';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';