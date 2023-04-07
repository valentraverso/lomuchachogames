<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Mobile Security & Antivirus'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>ESET&nbsp;Mobile Security &amp; Antivirus es un poderosisimo antivirus para Android que te mantendra seguro en tiempo real, ya sea mientras revisas correos, descargas canciones, navegas en internet o cualquier otra cosa.</p><p>Únase a millones de usuarios de todo el mundo, y disfrute de funciones como una interfaz intuitiva y fácil de usar, Antirrobo proactivo y Anti-Phishing.</p><p>Descargar&nbsp;<strong>ESET Mobile Security &amp; Antivirus&nbsp;</strong>APK en LOMUCHACHOgames y mantenete a salvo de cualquier cosa que pueda afectar tu dispositivo.</p>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';