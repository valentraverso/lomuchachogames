<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'GTA: Liberty City Stories'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Prepárate para regresar a la Costa Este ya que Grand Theft Auto: Liberty City Stories llega a dispositivos móviles. Con misiones más cortas y pulidas misiones, para que la acción nunca pare.</p>

<p>Toni Cipriani, antiguamente el hombre de confianza de la familia Leone, regresa a Liberty City tras pasar un tiempo escondido por haber asesinado a otro mafioso. Ahora, las calles de Liberty City están sumidas en el caos. Los mafiosos luchan por controlarlas mientras la ciudad empieza a autodestruirse por las oleadas de corrupción política, crimen organizado, tráfico de drogas y huelgas sindicales. Toni intentará que los Leone obtengan el control de la ciudad, pero en su camino se interpondrán asesinos desquiciados, magnates depravados, políticos cínicos y su propia madre.</p>

<p>Descargar<strong> GTA: Liberty City Stories </strong> APK + OBB gratis para Android en LOMUCHACHOgames y emprende esta grandiosa vida criminal.</p><p>En Grand Theft Auto Liberty CIty Stories para Android unite a las aventuras de Toni Cipriano y ayudalo a pasar todos los retos que se le opongan.</p>

<p>Este GTA tiene las siguientes caracteristicas:</p>
<ul>
 	<li>Nuevas ilustraciones de personajes y texturas en alta resolución</li>
 	<li>Luces y sombras en tiempo real</li>
 	<li>Distancia visual mejorada</li>
 	<li>Controles reequilibrados para jugar con dispositivos táctiles</li>
 	<li>Guardado en la nube multiplataforma a través del Social Club de Rockstar</li>
 	<li>Compatibilidad con mando físico</li>
</ul>";
include_once '../templates/game/v1.php';