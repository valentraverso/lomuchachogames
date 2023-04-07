<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Thimbleweed Park'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = '<p>Se encuentra 5 personas en un pueblo abandonado y se embarcan en un aventura clásica de tipo point y click. Entra en este mundo con gráfica de los 80\' y descubrí el misterio que ronda por el viejo pueblo.&nbsp;Al final de una larga y extraña noche en Thimbleweed Park, se revelarán todas las respuestas... y cuestionarás todo lo que creías que sabías.</p><p>Asi que ya sabes si te gustan los juegos de puzzles, este se va a transformar en tu videojuego para Android favorito, y ademas no va a ser un segundo en el cual no pares de reir y pensar.</p><p>Descarga&nbsp;<strong>Thimbleweed Park</strong> para Android gratis en LOMUCHACHogames y pone a prueba tu cerebro, esperamos no seas un el muerto.Al final de una larga y extraña noche en Thimbleweed Park, se revelarán todas las respuestas... y cuestionarás todo lo que creías que sabías.</p><p>Mas de Thimbleweed Park:</p><ul><li>De Ron Gilbert y Gary Winnick, creadores de Monkey Island y Maniac Mansion.</li><li>Una historia de crimen y misterio ambientada en 1987.</li><li>Cinco personajes jugables que pueden trabajar en equipo... o sacarse de quicio.</li></ul>';
include_once '../templates/game/v1.php';