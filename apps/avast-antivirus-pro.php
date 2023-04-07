<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Avast Antivirus PRO'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Protéjase frente a virus y otro malware con Avast Mobile Security, la aplicación antivirus gratis para Android más popular del mundo. Reciba alertas cuando se descarguen en su dispositivo aplicaciones infectadas con spyware o adware y vele por su privacidad.&nbsp;</p><p>Proteja su dispositivo contra ataques de phishing provenientes del correo electrónico, llamadas telefónicas, sitios web infectados o mensajes SMS. Active la VPN para navegar por la red de forma privada y segura, así como para acceder a sus servicios de transmisión de pago favoritos cuando desde el extranjero.</p><p>Descarga&nbsp;<strong>Avast Antivirus PRO</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y manten protegido tu movil.</p><p><strong>Avast Antivirus PRO</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD de la App</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';