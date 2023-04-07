<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Worms 2: Armageddon'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.2 o +";
$texto = "<p>Escoge tus granadas y prepárate para la batalla, ahora que los gusanos han vuelto más grandes y mejores que nunca en Worms™ 2: Armageddon.&nbsp;</p><p>El juego más aclamado de estrategia por turnos está ahora disponible para Android, con nuevas armas, nuevas opciones de personalización y muchas más explosiones.</p><p>Descargar <b>Worms 2: Armageddon</b> APK para Android GRATIS en LOMUCHACHOgames</p><p>Características de Worms™ 2: Armageddon:<br><br>• Genuino modo de juego Worms con imágenes tipo dibujo animado, divertido audio y sistema de control mejorado utilizando la innovadora interfaz de usuario en pantalla táctil.<br>• ¿Eres nuevo en Worms? Asegúrate de probar el modo Práctica, donde puedes utilizar las armas contra los gusanos de I.A.<br>• 30 misiones de jugador individual a través de 5 nuevos ambientes, incluyendo Manhattan, Medieval, Deportes, Obreros y Queso.<br>• Modo Matanza, enfréntate a interminables oleadas de gusanos enemigos cada vez más difíciles de vencer.</p>";
include_once '../templates/game/v1.php';