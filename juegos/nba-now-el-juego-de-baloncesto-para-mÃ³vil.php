
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'NBA NOW: El juego de baloncesto para móvil'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$img = "$fila[texto]";
$texto = "<p>Si te gustó NBA, NBA NOW te encantará.</p>

<p>Forma un equipo de campeonato y conviértete en el mejor jugador, GM o entrenador de todos los tiempos.</p>

<p>Descargar<strong> NBA NOW: El juego de baloncesto para móvil </strong>apk gratis para Android en LOMUCHACHOgames y se el mejor en las pistas.</p>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descarga NBA NOW: El juego de baloncesto para móvil GRATIS para Androi</title><meta name="description" content="Descarga NBA NOW: El juego de baloncesto para móvil GRATIS para Android en todas sus versiones en LOMUCHACHOgames.com"/> <meta name="keywords" content="NBA NOW: El juego de baloncesto para móvil, GAMEVIL Inc., Android,"></head>
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
                <span style="margin-left:5px;">GAMEVIL Inc.</span>
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
            <span>GAMEVIL Inc.</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Android</strong><br>
            <span>4.4 o +</span>               
        </div>
        <div class="col-xs-8" id="a">
            <strong>Apto</strong><br>
            <span>Todos</span>               
        </div>
    </div>
    <div class="row" id="buttond">
        <div class="col-xs-6">
               <a target="_blank" rel="external nofollow" href="http://download740.mediafire.com/d67jdd5chxrg/u2h1j99ubsdy5dp/NBAN1.2.9byLOMUCHACHOgames.apk" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://evassmat.com/18932179/nban-1-2-9apkmega" id="megaapk"?id=X>APK Mega</a>
        </div>
        
    </div>
    <hr>
    <div class="row">
    <div class="col-xs-12">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Anuncio celular -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7128213841177240"
     data-ad-slot="3335996006"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    ' . $texto . '
    </div>
    </div>
    <hr>
    <div class="row" id="n">
          <div class="col-xs-12">
        <h2>NECESARIO PARA LA INSTALACION</h2>
        </div>
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
 <p>NBA NOW: El juego de baloncesto para móvil para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p>
<ul>
 	<li>Juega sobre la marcha con controles sencillos</li>
 	<li>Enfréntate a jugadores de todo el mundo.</li>
 	<li>Forma un equipo campeón</li>
</ul>
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