<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Bus Simulator Vietnam'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Bus Simulator Vietnam (también conocido como BUSSVN) le permitirá experimentar un verdadero conductor de autobús en Vietnam de una manera real con el mapa de carreteras del pueblo, motocicletas en la carretera, el mismo autobús. la vida real en Vietnam. Se puede decir que BUSSVN es el primer y único juego en Vietnam producido y distribuido por Web3o Technology.</p><p>Con el lanzamiento de Bus Simulator Vietnam en 2018, y esto es solo el comienzo, tenemos y continuaremos actualizando el juego y mejorando la experiencia del jugador. ¿Qué estás esperando? ¡Descarga y juega Bus Simulator Vietnam ahora!</p><p>Descargar Bus Simulator Vietnam APK + OBB ultima version GRATIS para Android en LOMUCHACHOgames.</p><p>Mas informacion de Bus Simulator GRATIS para Android:</p><ul><li>Autobús de pasajeros del autobús es el más popular Thaco Mobihome Vietnam.</li><li>Muy fácil de controlar e intuitivo con 4 modos: volante, teclado, sensor de inclinación, Joystick</li><li>Ciudades y lugares en Vietnam</li><li>Abrir la puerta, abrir el maletero, la máquina de la cubierta, los limpiaparabrisas, ...</li><li>Cambiar la matrícula es muy realista y flexible</li><li>Reproductor de MP3 mientras se conduce</li><li>Gráficos 3D de alta calidad y detalles</li><li>Cambia el clima como quieras: es lluvioso, soleado, oscuro</li><li>Recoger pasajeros en el coche real</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';