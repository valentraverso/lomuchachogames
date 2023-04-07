<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Five Nights at Freddys 3'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>Treinta años después de Freddy Fazbear pizza cerrado sus puertas, los acontecimientos que tuvieron lugar allí se han convertido en nada más que un rumor y un recuerdo de la infancia, pero los propietarios de susto de Fazbear: El Horror de atracción están decididos a revivir la leyenda y hacer que la experiencia lo más auténtico posible para los clientes, haciendo grandes esfuerzos para encontrar cualquier cosa que pudiera haber sobrevivido a décadas de abandono y ruina.</p><p>Al principio sólo había cáscaras vacías, una mano, un gancho, un viejo papel-placa muñeca, pero luego se hizo un descubrimiento notable.</p><p>Descarga&nbsp;<strong>Five Nights at Freddys 3</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y vuelve a disfrutar de Freddy.</p><p><strong>Five Nights at Freddys 3 </strong>APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>La atracción tiene ahora un animatronic.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';