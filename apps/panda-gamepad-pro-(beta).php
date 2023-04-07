<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Panda Gamepad Pro (BETA)'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Panda Gamepad Pro es un mapeador de teclas diseñado específicamente para gamepad.</p><p>Descarga <strong>Panda Gamepad Pro (BETA)&nbsp;</strong>ultima version para Android en LOMUCHACHOgames y disfruta.</p>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';