
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papa\'s Freezeria'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$id = $fila['id'];
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$mediafireapk = $fila['mediafire apk'];
$megaapk = $fila['mega apk'];
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$creator = $fila['creador'];
$texto = "<p>Acabas de empezar un trabajo de verano de relax en una heladería frente al mar, pero las cosas se ponen dificiles cuando todos los clientes de Papa Louie llegan a la isla.</p><p>Tendrá que realizar múltiples tareas entre cada área del restaurante, mantenga contentos a sus clientes para ganar puntos y subir de nivel.</p><p>Descarga <strong>Papa's Freezeria To Go!</strong>&nbsp;para Android gratis apk en LOMUCHACHOgames y haz los mejores helados.</p>";
$info = "<p>Mas cosas acerca de Papa\'s Freezeria To Go! para Android gratis:</p><ul><li>Realizar varias tareas</li><li>Desafiando Closers y crítico gastronómico</li><li>120 logros en el juego para ganar</li><li>85 clientes para desbloquear las órdenes</li></ul>";
$versiondispositivo = "2.2 o +";
$edad = "Todos";
$title = "Descargar Papa\'s Freezeria GRATIS para Android";
$description = "Descarga Papas Freezeria APK GRATIS para Android en español, tenes tu propia heladería y vas a tener que satisfacer a tus clientes con tus diferentes productos";
$key = "Papa\'s Freezeria, descargar Papa\'s Freezeria, descargar juegos gratis para android,";
$tags = '<b>Estrategia</b><b>Casual</b>';
include_once '../plantillas/partall.php';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';