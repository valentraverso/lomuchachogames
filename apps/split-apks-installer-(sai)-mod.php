<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Split APKs Installer (SAI) MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>SAI es una aplicación para instalar y exportar APK divididos, aplicaciones que consisten en múltiples APK. SAI puede instalar aplicaciones usando la API estándar de Android, usando el acceso raíz o usando Shizuku.</p><p>Tenga en cuenta que SAI solo instala archivos proporcionados por el usuario y no es responsable del comportamiento de esas aplicaciones. Tenga en cuenta también que algunos dispositivos / ROM no son compatibles con SAI, lo que tiene que ver con una mala implementación de la API de Android en dichas ROM y no se puede arreglar en el lado de la aplicación.</p><p>Descarga&nbsp;<strong>Split APKs Installer (SAI) MOD</strong>&nbsp;apk &nbsp;en su ultima version&nbsp;en LOMUCHACHOgames y instala todo mas facil.</p><p><strong>Split APKs Installer (SAI) MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD de la App</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';