<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Age of Empires: Castle Siege'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Age of Empires®: Castle Siege te invita a guiar a tu imperio por la Edad Media en tu dispositivo Android. Elige una de las civilizaciones, incluidos britanos, teutones y kievitas. Mejora tu bastión, fortifica tus murallas y guarece tropas defensoras para protegerte de los desvalijadores. Entrena un ejército para saquear otras ciudades y toma el mando de la batalla para desmantelar las defensas del enemigo.</p><p>A través de las épocas investigarás tecnologías, vivirás batallas famosas y reclutarás a héroes para tu causa, incluyendo a Saladino, a Ricardo Corazón de León y Juana de Arco. Burla a los que te ataquen y derrota a tus victimas para conseguir logros y copa los marcadores.</p>";
$info = "<p>Descargar Age of empires nunca fue tan facil, descargalo el apk para tu dispositivo android gratis del mejor juego de estrategia medieval. Este juego ya no se encuentra más en la Play Store pero lo vas a poder descargar gratis en LOMUCHACHOgames.</p><p>Expande tu experiencia de juego en los dispositivos Android y en Windows por medio de Xbox Live. ¡Únete al asedio!</p><p>Es muy simple descargar Age Of Empires Castle Siege para Android apk última versión.</p>";
$versiondispositivo = "4.2 o +";
$mod = "";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';