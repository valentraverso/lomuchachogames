<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Horrorfield HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Acción de terror basada en equipos online. Juega con otros en tiempo real. ¿A quién atrapará y sacrificará el airado carnicero y quién escapará y seguirá con vida? Todo depende de ti. Únete al grupo de 7 supervivientes distintos, cada uno con su propio rol y capacidades únicas.</p><p>El objetivo de los supervivientes es unir fuerzas, desarrollar una estrategia y huir de la espeluznante guarida del psicópata. Escóndete, colabora y usa y combina distintas habilidades y objetos. Juega en un recinto cerrado repleto de trampas letales y escondites.</p><p>Descarga&nbsp;<strong>Horrorfield HACK</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y escapa lo mas rapido.</p><p><strong>Horrorfield HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';