<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Representante de Fútbol (Football Agent) MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Sé la persona detras de los mayores acuerdos en el fútbol. No te importan los trofeos ni las medallas. Solo te importa el dinero y la felicidad de tus clientes.</p><p>Juega en Inglaterra, España, Alemania, Holanda, Francia, Países Bajos, Rusia, Turquía, República Checa, Polonia, Brasil, Portugal o Italia, negocia acuerdos en nombre de tus clientes, compensa la felicidad de tus clientes mientras te aseguras de obtener tu paga.</p><p>Descarga&nbsp;<strong>Representante de Fútbol (Football Agent) MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y domina el ámbito futbolístico.</p>";
$info = "<p><strong>Representante de Fútbol (Football Agent) MOD</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Ojea para descubrir jugadores que pueden ser las próximas superestrellas.</li><li>Mantén a tus clientes felices lidiando con sus problemas personales.</li><li>Forja relaciones con los clubes para tener los mejores acuerdos.</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "MOD";
include_once '../templates/game/v1.php';