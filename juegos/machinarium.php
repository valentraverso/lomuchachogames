<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Machinarium'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Machinarium es la aclamada aventura independiente desarrollada por los creadores de Samorost y Botanicula.&nbsp;</p><p>Ayuda a Josef el robot a salvar a su novia Berta, secuestrada por la Hermandad del Sombrero Negro.</p><p>Descarga <strong>Machinarium</strong>&nbsp;para Android gratis y vive esta aventura.</p><p>Mas cosas sobre Machinarium:</p><ul><li>4/4 - USA TODAY</li><li>4/4 - SlideToPlay</li><li>9/10 - Pocket Gamer</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';