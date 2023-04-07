
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'LEGO® Ninjago™ Shadow of Ronin'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$texto = "<p>Hay una nueva amenaza en Ninjago y se hace llamar Ronin. Con ayuda de su ejército de samuráis oscuros, Ronin roba los recuerdos de los ninjas valiéndose de un arma conocida como Guja de Obsidiana.</p>

<p>Los jugadores deben ayudar a los ninjas a recuperar sus recuerdos y recobrar sus poderes antes de que Ronin complete su plan y libere un mal aún mayor en Ninjago. Los jugadores combatirán en escenarios emblemáticos de la serie de televisión, tales como el Templo de Hielo, los Pantanos Tóxicos y una nueva y misteriosa isla. También, visitarán la aldea montañesa de Spinjago, donde los ninjas están entrenando con el gran Sensei Dareth y el Sensei Wu.</p>

<p>Descargar <strong>LEGO® Ninjago™ Shadow of Ronin </strong>apk + obb gratis para Android en LOMUCHACHOgames y se un verdadero ninja.</p>";
$info = "<p>LEGO® Ninjago™ Shadow of Ronin para Android es una gran opcion a la hora de elegir ente juegos de aventura. Algunas características de este son:</p>
<ul>
 	<li>Explora Ninjago</li>
 	<li>Las armas de obsidiana</li>
 	<li>Villanos clásicos</li>
</ul>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descarga LEGO® Ninjago™ Shadow of Ronin GRATIS para Android</title><meta name="description" content="Descarga LEGO® Ninjago™ Shadow of Ronin GRATIS para Android en todas sus versiones en LOMUCHACHOgames.com"/> <meta name="keywords" content="LEGO® Ninjago™ Shadow of Ronin, Warner Bros. International Enterprises, Android,"></head>
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
               <a target="_blank" rel="external nofollow" href="http://download2014.mediafire.com/sj9614bctqzg/z1dsmc1gnc6zmb3/LEGONSRbyLOMUCHACHOgames.apk" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://evassmat.com/18932179/legonsrapkmega" id="megaapk"?id=X>APK Mega</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;" rel="external nofollow" href="http://download1489.mediafire.com/saa8rf2l7yqg/71cwu53s6pg6pyj/LEGONSRbyLOMUCHACHOgames.zip" id="mediafireapk">OBB Mediafire</a>
        </div><div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;"  rel="external nofollow" href="http://evassmat.com/18932179/legonsrobbmega" id="megaapk">OBB Mega</a>
        </div>
    </div>';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';