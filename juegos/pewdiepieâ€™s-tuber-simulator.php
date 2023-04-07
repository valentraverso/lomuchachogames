
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'PewDiePie’s Tuber Simulator'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$texto = "<p>PewDiePie’s Tuber Simulator es el juego donde te transformaras en PewDiePie y tendras que ayudarlo con su canal de YouTube a hacerlo crecer. Descarga el apk + obb, empeza a jugar y pasa los retos que este juego de ser un youtuber para Android tiene.</p>
<p>Lleva tu canal a la gloria, no te conviertas en un youtuber despreciado por la gente. Este juego de Youtube es muy divertido y adictivo por lo cual te pasaras horas jugando sin aburrirte ni un segundo.</p>
<p>Descargar <strong>PewDiePie’s Tuber Simulator</strong> ultima version apk + obb en LOMUCHACHOgames.</p>";
$info = "<p>PewDIePie’s Tuber Simulator ultima version es el mejor juego de ser youtuber para Android.</p>
<ul>
<li>¡HAZ VÍDEOS y GANA VISUALIZACIONES y SUSCRIPTORES para comprar nuevos OBJETOS como EQUIPAMIENTO, MUEBLES, ROPA e incluso MASCOTAS!</li>
<li>¡CON LA VOZ REAL del mismísimo PewDiePie!</li>
<li>¡COMPLETA MISIONES ÉPICAS para ganar dinero rápidamente!</li>
<li>¡MUESTRA TU INCREÍBLE HABITACIÓN compartiéndola en línea!</li>
<li>¡SIGUE A TUS JUGADORES FAVORITOS y VOTA por ellos en EVENTOS SEMANALES!</li>
<li>¡CONECTA CON AMIGOS y envía o recibe REGALOS CON SWAG!</li>
<li>¡DESAFÍA A TUS AMIGOS en la arena de supervivencia y presume de puntuación en Facebook!</li>
<li>¡JUEGA A PUGGLE, el minijuego más adorable que existe!</li>
<li>¡ASOMBROSA BANDA SONORA CHIPTUNE compuesta por RUSHJET1, compositor de PEWDIEPIE: LEGEND OF THE BROFIST!</li></ul>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descargar PewDiePie’s Tuber Simulator GRATIS APK + OBB para Android</title><meta name="description" content="Descargar PewDiePie’s Tuber Simulator '.$version.' para Android GRATIS APK + OBB, PewDiePie’s Tuber Simulator para Android libre sin virus. Juga con PewDiePie\'s"/> <meta name="keywords" content="PewDiePie’s Tuber Simulator, descarga PewDiePie’s Tuber Simulator, juegos para android,"></head>
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
                <span style="margin-left:5px;">Outerminds Inc.</span>
            <div class="tags">
                <a href="https://lomuchachogames.com/juegos/categorias/casual.php"><b>Casual</a></b><a href="https://lomuchachogames.com/juegos/categorias/simulacion.php"><b>Simulacion</a></b> </div>
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
            <span>Outerminds Inc.</span>               
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
               <a target="_blank" rel="external nofollow" href="https://download1519.mediafire.com/54aj9jl2zoog/bp9ci11hrqr6x30/PDPTS-1.38.0APKbyLOMUCHACHOgames.apk" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://sowernal.com/18932179/pdpts-1-38-0apkm" id="megaapk"?id=X>APK Mega</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;" rel="external nofollow" href="https://download1485.mediafire.com/u6fgo0c6xt1g/248lx51swp7i6la/PDPTS-1.38.0OBBbyLOMUCHACHOgames.zip" id="mediafireapk">OBB Mediafire</a>
        </div><div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;"  rel="external nofollow" href="http://sowernal.com/18932179/pdpts-1-38-0obbm" id="megaapk">OBB Mega</a>
        </div>
    </div>';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';