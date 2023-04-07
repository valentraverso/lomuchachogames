<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Evertale HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Únete a un grupo de héroes extraordinarios y libera al mundo de Erden del mortífero Pandemonium. Reúne, entrena y evoluciona a más de 180 criaturas y guerreros para luchar juntos en abrumadoras batallas de monstruos.</p><p>En Evertale sumérgete en un impresionante mundo de fantasía repleto de monstruos misteriosos para capturar, luchar y entrenar.</p><p>Descargar&nbsp;<strong>Evertale&nbsp;HACK </strong>apk gratis para Android en LOMUCHACHOgames y lucha contra los feroces monstruos.</p><p><strong>Evertale HACK</strong> para Android es una gran opcion a la hora de elegir ente juegos de rol. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';