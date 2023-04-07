<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Threema'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Threema es el servicio de mensajería segura preferido en todo el mundo. Threema mantiene sus datos fuera del alcance de hackers, empresas y el gobierno, y puede utilizarse de forma totalmente anónima.&nbsp;</p><p>Además permite hacer llamadas de voz cifradas de extremo a extremo y ofrece todas las opciones deseables de una aplicación de mensajería instantánea con tecnología punta. Threema Web le permite utilizar Threema también desde el ordenador.</p><p>Descarga&nbsp;<strong>Threema</strong> Survatos obb en su ultima version&nbsp;en LOMUCHACHOgames y comunicate libremente.</p><p><strong>Threema</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>EL CIFRADO MÁS POTENTE</li><li>NUMEROSAS FUNCIONALIDADES</li><li>ANONIMATO TOTAL</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';