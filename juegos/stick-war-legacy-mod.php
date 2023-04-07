<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Stick War Legacy MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Descubre Stick War, uno de los juegos de garabatos más grandes, divertidos, desafiantes y adictivos. Controla a tu ejército en formaciones o controla a cada unidad por separado. Tendrás control total sobre todos los garabatos.&nbsp;</p><p>Crea unidades, obtén oro, aprende la senda de la espada, de la lanza, del arco, de la magia e incluso de los gigantes y destruye la estatua.</p><p>Descarga&nbsp;<strong>Stick War Legacy MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y captura todos los territorios.</p>";
$info = "<p><strong>Stick War Legacy MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';