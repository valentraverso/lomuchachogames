
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Copa Toon: ¡Goleadores! de CN'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$texto = "<p>Juega como uno de los 16 diferentes capitanes de tus programas de Cartoon Network favoritos, como Hora de aventura, Steven Universe, Un show más, El increíble mundo de Gumball, Escandalosos, Clarence y Tío Grandpa.</p><p>Conviértete en goleador con tus personajes favoritos de Cartoon Network en Copa Toon</p><p>Descarga <strong>Copa Toon: ¡Goleadores! de CN&nbsp;</strong>apk y obb gratis en LOMUCHACHOgames y se el mejor en la cancha.</p>";
$info = "<p>Lo que trae Copa Toon: ¡Goleadores! de CN gratis:</p><ul><li>FÚTBOL SOFISTICADO</li><li>CAOS DE VARIOS JUGADORES</li><li>DIVERSIÓN GARANTIZADA</li></ul>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descarga Copa Toon: ¡Goleadores! de CN GRATIS para Android</title><meta name="description" content="Descarga Copa Toon: ¡Goleadores! de CN GRATIS para Android en todas sus versiones en LOMUCHACHOgames.com"/> <meta name="keywords" content="Copa Toon: ¡Goleadores! de CN, Cartoon Network, Android,"></head>
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
                <span style="margin-left:5px;">Cartoon Network</span>
            <div class="tags">
                <a href="https://lomuchachogames.com/juegos/categorias/deportes.php"><b>Deportes</a></b> </div>
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
            <span>Cartoon Network</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Android</strong><br>
            <span>4.1 o +</span>               
        </div>
        <div class="col-xs-8" id="a">
            <strong>Apto</strong><br>
            <span>Todos</span>               
        </div>
    </div>
    <div class="row" id="buttond">
        <div class="col-xs-6">
               <a target="_blank" rel="external nofollow" href="http://download1412.mediafire.com/hp5upmxfm1jg/cbbycf8dxrnpspe/CTGCN1.1.1byLOMUCHACHOgames.apk" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://covelign.com/18932179/ctgcn-1-1-1apkmega" id="megaapk"?id=X>APK Mega</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;" rel="external nofollow" href="http://download1060.mediafire.com/6p14uh1yi2xg/3f566hbbeqcb555/CTGCN1.1.1byLOMUCHACHOgames.zip" id="mediafireapk">OBB Mediafire</a>
        </div><div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;"  rel="external nofollow" href="http://covelign.com/18932179/ctgcn-1-1-1obb" id="megaapk">OBB Mega</a>
        </div>
    </div>';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';