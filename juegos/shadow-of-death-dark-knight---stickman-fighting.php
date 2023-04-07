
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Shadow of Death: Dark Knight - Stickman Fighting'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$texto = "<p>Juega este envolvente juego de rol y fantasía de bolsillo que puedes llevar a donde quieras. Sombra de la muerte lleva al límite las fronteras de los juegos para móviles con un juego de peleas que no necesita de internet para disfrutarse.</p><p>Lucha con tu propio estilo de pelea, los jugadores pueden elegir de entre cuatro caballeros de las sombras únicos, diferentes estilos de juego y montones de conjuntos de armaduras para conquistar un mundo oscuro.</p><p>Descargar <strong>Shadow of Death: Dark Knight - Stickman Fighting&nbsp;</strong>APK en LOMUCHACHOgames y lucha contra tus enemogos oscuros.</p>";
$info = "<p>Lo que trae Shadow of Death: Dark Knight - Stickman Fighting apk:</p><ul><li>Conquista la Oscuridad con Estilo</li><li>Opción a los Jugadores</li><li>Un Hermoso Mundo en Ruinas</li><li>Desafía al Universo</li></ul>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descarga Shadow of Death: Dark Knight - Stickman Fighting GRATIS</title><meta name="description" content="Descarga Shadow of Death: Dark Knight - Stickman Fighting GRATIS para Android en todas sus versiones en LOMUCHACHOgames.com"/> <meta name="keywords" content="Shadow of Death: Dark Knight - Stickman Fighting, Zonmob Game Studio, Android,"></head>
    <body>';
include_once '../php/menuentre.php';
echo '
    </div>
<div class="container-fluid">
    <div class="row" >
        <div class="col-xs-4">
            <img class="fotos" src="../'.$img.'">
        </div>
        <div class="col-xs-8" id="principal3s">
            <h1 class="titulo">' . $nombre . '</h1>
                <span style="margin-left:5px;">Zonmob Game Studio</span>
            <div class="tags">
                <a href="https://lomuchachogames.com/juegos/categorias/accion.php"><b>Accion</a></b> </div>
            <a href="https://lomuchachogames.com"><p class="volver">Volver a LOMUCHACHOgames</p></a>
        </div> 
    </div>
    <div class="row" id="r">
        <div class="col-xs-8" id="v">
            <strong>Version</strong><br>
            <span>'. $version . '</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Tamaño</strong><br>
            <span>' . $tamano . '</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Creador</strong><br>
            <span>Zonmob Game Studio</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Android</strong><br>
            <span>4.1 o +</span>               
        </div>
        <div class="col-xs-8" id="a">
            <strong>Apto</strong><br>
            <span>+15</span>               
        </div>
    </div>
    <div class="row" id="buttond">
        <div class="col-xs-6">
               <a target="_blank" rel="external nofollow" href="http://download1084.mediafire.com/9x5zyfappsog/3rg3a5laua40sha/SDDKSF1.50.0.0byLOMUCHACHOgames.apk" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://onisedeo.com/18932179/sddksf-1-50-0-0apkmega" id="megaapk"?id=X>APK Mega</a>
        </div>
        
    </div>';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';