<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Bitcoin Billionaire HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Todo se trata de rastrillar en bitcoins y la construcción de una fortuna enorme! Se empieza con casi nada: una oficina destartalada, un escritorio viejo y desvencijado, un equipo de mala muerte. Al hacer uso de la pantalla se puede extraer bitcoins virtuales y poco a poco aumentar su riqueza. Pasar la masa digital para actualizar esos muebles horrible en cosas ostentosos como centros de entretenimiento y valiosas obras de arte.</p><p>Descarga <strong>Bitcoin Billionaire HACK&nbsp;</strong>apk en LOMUCHACHOgames y hazte millonario.</p><p>Lo que trae Bitcoin Billionaire HACK:</p><ul><li>Diamantes Ilimitados</li></ul>";
include_once '../templates/game/v1.php';