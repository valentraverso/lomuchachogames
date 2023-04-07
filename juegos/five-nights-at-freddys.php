<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Five Nights at Freddys'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Bienvenido a tu nuevo trabajo de verano en Freddy Fazbear's Pizza, donde niños y padres vienen por entretenimiento y comida hasta donde alcanza la vista. La atracción principal es Freddy Fazbear, por supuesto; y sus dos amigos. Son robots animatrónicos, programados para complacer a las multitudes. Sin embargo, el comportamiento de los robots se ha vuelto algo impredecible por la noche, y fue mucho más barato contratarlo como guardia de seguridad que encontrar un reparador.</p><p>Desde su pequeña oficina debe observar atentamente las cámaras de seguridad. Tiene una cantidad muy limitada de electricidad que puede usar por noche.</p><p>Descarga&nbsp;<strong>Five Nights at Freddys</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y no dejes que Freddy te atrape.</p><p><strong>Five Nights at Freddys</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>¿Puedes sobrevivir cinco noches en Freddy's?</li><li>Se requiere un dispositivo con al menos 1 GB de RAM para que este juego funcione correctamente.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';