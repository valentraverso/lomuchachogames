<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'KineMaster - Editor de Vídeo'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>KineMaster es el editor de vídeo completo para Android. KineMaster cuenta con poderosas herramientas fáciles de usar, como multicapa de vídeo, modos combinación, doblajes, Chroma Key, control de velocidad, transiciones, subtítulos, efectos especiales, ¡Y mucho más! Descubre por qué los creadores adoran KineMaster para Youtube, TikTok e Instagram, Y por qué los periodistas, educadores, comerciales y blogueros lo usan profesionalmente.&nbsp;</p><p>Descarga KineMaster para crear, editar y compartir tus asombrosos vídeos</p><p>Mas sobre KineMaster:</p><ul><li>MOD de la App</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';