<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Evertale'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Únete a un grupo de héroes extraordinarios y libera al mundo de Erden del mortífero Pandemonium. Reúne, entrena y evoluciona a más de 180 criaturas y guerreros para luchar juntos en abrumadoras batallas de monstruos.</p>

<p>En Evertale sumérgete en un impresionante mundo de fantasía repleto de monstruos misteriosos para capturar, luchar y entrenar.</p>

<p>Descargar <strong>Evertale </strong>apk gratis para Android en LOMUCHACHOgames y lucha contra los feroces monstruos.</p><p>Evertale para Android es una gran opcion a la hora de elegir ente juegos de rol. Algunas características de este son:</p>
<ul>
 	<li>PELEA Y CONÉCTATE</li>
 	<li>DESCUBRE LA HISTORIA</li>
 	<li>CAPTURA Y EXPLORA</li>
</ul>";
include_once '../templates/game/v1.php';