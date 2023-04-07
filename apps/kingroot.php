<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'KingRoot'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>KingRoot es una herramienta de rooteo para Android sencilla de usar y facil de entender. &nbsp;Se implementará la estrategia de Root más adecuada desde la cloud en su dispositivo de acuerdo con la información de su ROM. Por tanto, es necesario mantener la conexión con Internet durante el proceso de root. Además, la app KingRoot no activará Samsung KNOX y tiene la capacidad de cerrar Sony_RIC perfectamente. Adicionalmente, también se puede realizar fácilmente la operación de unroot (eliminar el acceso root) con un solo hacer clic en un botón del menú de KingRoot.</p><p>Antes que nada, lo primero que podemos hacer es ampliar el tiempo en reposo y ahorrar carga de su batería. ¡Al purificar las apps que insisten en operar en segundo plano, podemos ahorrar RAM para usted y hacer que su dispositivo funcione más rápidamente que nunca! Además, las aplicaciones que utilizan cantidades de RAM superiores a la media también también pueden ejecutarse más fluidamente después de implementar el modo purificar.</p><p>Descarga&nbsp;<strong>KingRoot&nbsp;</strong>oficial para Android en LOMUCHACHOgames y hacete un usuario &nbsp;root.</p><p>Mas cosas sobre esta app de root de Android:</p><ul><li>Root automatico</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';