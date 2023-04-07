
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'The LEGO ® Movie Video Game'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$texto = "<p>Transforma lo ordinario en extraordinario y disfruta de una gran experiencia constructiva de LEGO con La LEGO Película: El Videojuego cuando llegué a los móviles.</p>

<p>Entra en el mundo de Emmet, un ciudadano medio, completamente ordinario, y que sigue las reglas a rajatabla, pero que será confundido con una de las personas más extraordinarias del mundo y la clave para salvar al mundo. Los jugadores deberán guiarle en una épica aventura para detener a un malvado tirano, un viaje para el que Emmet no está preparado.</p>

<p>Descargar <strong>The LEGO ® Movie Video Game </strong>apk + obb gratis para Android en LOMUCHACHOgames y haz la mejor creacion.</p>";
$info = "<p>The LEGO ® Movie Video Game para Android es una gran opcion a la hora de elegir ente juegos de aventura. Algunas características de este son:</p>
<ul>
 	<li>Viaja a través de fantásticos mundos</li>
 	<li>Revienta más bloques que nunca</li>
 	<li>Colecciona y utiliza las páginas de instrucciones de LEGO</li>
</ul>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descarga The LEGO ® Movie Video Game GRATIS para Android</title><meta name="description" content="Descarga The LEGO ® Movie Video Game GRATIS para Android en todas sus versiones en LOMUCHACHOgames.com"/> <meta name="keywords" content="The LEGO ® Movie Video Game, Warner Bros. International Enterprises, Android,"></head>
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
                <span style="margin-left:5px;">Warner Bros. International Enterprises</span>
            <div class="tags">
                <a href="https://lomuchachogames.com/juegos/categorias/accion.php"><b>Accion</a></b><a href="https://lomuchachogames.com/juegos/categorias/aventura.php"><b>Aventura</a></b> </div>
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
            <span>Warner Bros. International Enterprises</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Android</strong><br>
            <span>4.0.3 o +</span>               
        </div>
        <div class="col-xs-8" id="a">
            <strong>Apto</strong><br>
            <span>+10</span>               
        </div>
    </div>
    <div class="row" id="buttond">
        <div class="col-xs-6">
               <a target="_blank" rel="external nofollow" href="http://download1585.mediafire.com/4bovejp8b36g/boe8kv2oun8l8p0/TLEGOMVGbyLOMUCHACHOgames.apk" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://evassmat.com/18932179/legomshapkmega" id="megaapk"?id=X>APK Mega</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;" rel="external nofollow" href="http://download2224.mediafire.com/qb3k2ccovnbg/14nacqly4nf1od1/TLEGOMVGbyLOMUCHACHOgames.rar" id="mediafireapk">OBB Mediafire</a>
        </div><div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;"  rel="external nofollow" href="http://evassmat.com/18932179/tlegomvgobbmega" id="megaapk">OBB Mega</a>
        </div>
    </div>';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';