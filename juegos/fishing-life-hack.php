<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Fishing Life HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Fishing Life Hack es un juego de pesca, donde la tranquilidad y la relajación te llegara mientras sacas peces del agua. Disfrute de la pesca de ballenas con un simple control mientras escucha el sonido de las olas ASMR en el hermoso mar.</p>

<p>Gracias al mod apk podras comprar todo lo que quieras de la tienda de forma ilimitada, porque este apk Fishing Life contiene dinero ilimitado para que obtengas las mejores cañas, barcos y carnadas.</p><p>Descargar <strong>FIshing Life </strong>apk mod 0.0.41 en LOMUCHACHOgames y viví una gran experiencia mientras pescas en el mar.</p><p>Fishing Life ultima version hackeado para Android trae dinero ilimitado para que disfrutes todas las características de este fabuloso juego de pescar.</p>

Ademas contiene:
<ul>
 	<li>Puedes pescar peces hermosos, tiburones asustadizos y grandes ballenas con un simple control.</li>
 	<li>Disfrute de la hermosa puesta de sol y la luz de la luna que se desvanecen en el mar. Presenta las hermosas escenas del amanecer y la puesta de la luna a medida que pasa el tiempo.</li>
 	<li>El sonido de las olas sana tu corazón.
El sonido natural de las ondas ASMR te lleva al mar sin preocupaciones.</li>
 	<li>Intenta poner tus peces en el acuario. Incluso con solo mirarlos te hace sentir a gusto.</li>
 	<li>Disfruta de tu propia pesca mientras te cambias a ropa diferente.</li>
 	<li>Está bien subir al bote e ir al mar.
Varios barcos te llevarán más lejos en el mar.</li>
</ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';