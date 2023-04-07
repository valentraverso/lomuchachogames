
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Bloons Supermonkey 2'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$texto = "<p>Bienvenido a este maravilloso juego de globos coloridos voladores que  van y vienen, destruyelos con tu Super Monkey para que no lleguen hasta Monkey Town.<p/>

<p>Equípate con un montón de poderosas armas, desbloquea Super Monkeys nunca vistos y usa decenas de potenciadores capaces de arrasar con todo en pantalla para despejarla de bloons y lograr una clasificación de diamante perfecta.<p/>

<p>Descargar <strong>Bloons Supermonkey 2 </strong>gratis APK en LOMUCHACHOgames y destruí esos globos asesinos.<p/>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descarga Bloons Supermonkey 2 GRATIS par Android</title><meta name="description" content="Descarga Bloons Supermonkey 2 GRATIS par Android en todas sus versiones en LOMUCHACHOgames.com"/> <meta name="keywords" content="Bloons Supermonkey 2, ninja kiwi, Android,"></head>
    <body>';
include_once '../php/menuentre.php';
echo '
    </div>
<div class="container-fluid">
    <div class="row" >
        <div class="col-xs-4">
            <img class="fotos" src="../fotos/supermonkey.jpg">
        </div>
        <div class="col-xs-8" id="principal3s">
            <h1 class="titulo">' . $nombre . '</h1>
                <span style="margin-left:5px;">ninja kiwi</span>
            <div class="tags">
                <a href="hthttps://lomuchachogames.com/juegos/categorias/accion.php"><b>Accion</a></b> </div>
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
            <span>ninja kiwi</span>               
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
               <a target="_blank" rel="external nofollow" href="http://fainbory.com/18932179/bs2-1-8-1" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://fainbory.com/18932179/bs2-1-8-1mega" id="megaapk"?id=X>APK Mega</a>
        </div>
        
    </div>
    <hr>
    <div class="row">
    <div class="col-xs-12">
    ' . $texto . '
    </div>
    </div>
    <hr>
    <div class="row" id="n">
        <h2>NECESARIO PARA LA INSTALACION</h2>
        <div class="esfile">
            <div class="ftesfile"><img src="../fotos/Esfile.jpg"></div>
            <div class="descripcion"><span>Es File Explorer Pro</span><br>
                <span id="t">7 MB</span></div>
        </div>
        <br>
        <hr style="margin:0px;margin-top:10px;">
    </div>
    <div class="row" id="informacion">
    <div class="col-xs-12">
        <h2>INFORMACION ADICIONAL</h2><br>
        <div id="infoadicional">
 <p><p>LOMUCHACHOgames te da la posibilidad de elegir entre Mega y Mediafire para descargar tu juego favorito!!<p/>

Lo que trae Mr Bow full apk:
<ul>
 	<li>Vive un festival de diversión, acción trepidante y explosiones a montones.</li>
 	<li>Supera 50 alucinantes niveles, cada uno con exclusivas hordas de bloons.</li>
 	<li>Alucina con la diversión colorida y sencilla pensada para jugadores novatos o para compartir en familia.</li>
 	<li>Completa intensos desafíos de habilidad pensados para jugadores expertos.</li>
 	<li>Equípate con más de 90 armas y poderes épicos, como «Doom Gauntlets», «Sidewinder Ace» o «Yeti».</li>
 	<li>Usa más de 40 potenciadores capaces de arrasar con todos los bloons, como «Explosive Shots», «Parallel Universe Monkey» y «Sun God».</li>
 	<li>Compara clasificaciones con tus amigos.</li>
 	<li>Comunícate con divertidas pegatinas para iMessage gratis.</li>
</ul></p>
     </div>
    </div>';
           $texto1 = str_replace(" ", "-", $nombre);
    $texto_guion = str_replace(":", "", $texto1);
            $select = "SELECT COUNT(nombre) FROM version WHERE nombre = '$nombre' ORDER BY version.version DESC";
$dato = $conn->query($select);
$fila = mysqli_fetch_array($dato);
$count = $fila['COUNT(nombre)'];
if($count > 4){
echo '
            <hr style="margin-top:5px;margin-bottom:5px;">
              <div class="col-xs-12">        
<div class="otrasversiones">
        <div class="texto">
            <h3>Otras Versiones</h3>
        </div>
        <div class="inside">';
$array = array();
array_push($array, $count);
$arrat = implode($array);
if($arrat >= 2){
    $selec = "SELECT * FROM version WHERE nombre = '$nombre'";
$data = $conn->query($selec);

    while($fil = mysqli_fetch_array($data)){
 echo'
            <a href="http://localhost/baljala/public_html/juegos/versiones/'.$texto_guion.'.php">
            <div class="cuadradito">
   <span id="vspan">'.$fil['version'].'</span>
                          <span id="tspan">'.$fil['tamano'].'</span>
            </div>
        </a>
';
}
}

echo '
            </div>
        </div>
        </div>';
} echo'
        <hr style="margin-top:5px;margin-bottom:-5px;">
    <div id="p">
        <a href="http://baljala.com" target="_blank" ><img src="../fotos/Patrocinador.png"></a>
    </div>
    <br>
    <br>
    <br>
</div>';
include_once '../plantillas/footer.php'; 
echo '
<script src="../js/menu.js"></script>
';