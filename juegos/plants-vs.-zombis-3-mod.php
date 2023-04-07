<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Plants vs. Zombis 3 MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Reúne un equipo de plantas recién cortadas, defiende tu ciudad de los ataques de zombis, avanza a través de los difíciles desafíos del jefe y conéctate con otros en línea para mostrar tus habilidades inspiradoras en el césped.</p><p>Con la ayuda de sus jefes zombis, los Brainiacs y la enorme Torre de Devoración Brain Fog, el Dr. Zomboss ha conquistado todas las cuadras de tu ciudad. Para derrotarlo, tendrás que hacer retroceder a Brain Fog y recuperar tu territorio en las batallas clásicas de defensa de la torre.</p><p>Descarga&nbsp;<strong>Plants vs. Zombis 3 MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y derriba a los zombies.</p>";
$info = "<p><strong>Plants vs. Zombis 3 MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Mucho Sol</li></ul>";
$versiondispositivo = "4.4 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';