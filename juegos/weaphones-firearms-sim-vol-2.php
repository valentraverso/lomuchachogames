<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Weaphones Firearms Sim Vol 2'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Este es un gran simulador de armas de fuego reales para Android, donde elegirás que armas quieres usar y empezaras a escuchar que sonido.</p><p>Recarga tu arma y cambia silenciadores en&nbsp;Weaphones™ Firearms Sim Vol 2.&nbsp;Aprovecha la potencia de la construcción en las capacidades del acelerómetro y de flash para una experiencia más auténtica. Convertido en un francotirador mientras que la cámara masiva ronda de calibre .50 o imaginarse a sí mismo como Rambo cadera disparar el 60.</p><p>Descarga&nbsp;<strong>Weaphones Firearms Sim Vol 2&nbsp;</strong>apk gratis en LOMUCHACHOgames y experimenta armas como si fuera la vida real.</p><p>Lo que trae Weapons Firearms Sim Vol 2:</p><ul><li>Interacción y Control total</li><li>Mecánica Arma auténticos</li><li>Accesorios y Opciones de pintura</li><li>No Hasta-Sells o actualizaciones, usted consigue todo y libre de Actualizaciones</li><li>Detallados gráficos Full HD</li><li>100% personalizable para adaptarse al tamaño de la mano del usuario y Preferencia</li></ul>";
include_once '../templates/game/v1.php';