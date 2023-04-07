
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'NBA 2K19'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$texto = "En NBA vas a poder jugar al basquetball con tu equipo favorito, ya se Lakers, Chicago o cualquier otro. Siente como es estar mano a mano con los mejores y ademas los mejores graficos hasta el momento para un juego sobre este deporte. Ademas tienes la opcion de comprar y vender jugadores a tu gusto en el mondo Carrera.</p><br>

<p>Este juego para Android fue lanzado 2K es conmemorando el estreno del 2k hace hace 20 años.</p><br>

<p>Descarga <strong>NBA 2K19</strong> para Android gratis con su obb + apk en LOMUCHACHOgames y divertite jugando al basket en tu dispositivo movil</p>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descargar NBA 2K19 para Android GRATIS apk + obb ultima version</title><meta name="description" content="Descarga NBA 2K19 52.0.1 gratis para Android apk + obb full - Juegos de basquet para Android GRATIS "/> <meta name="keywords" content="NBA 2K19, descargar NBA 2K19 android, NBA android,"></head>
    <body>';
include_once '../php/menuentre.php';
echo '
    </div>
<div class="container-fluid">
    <div class="row" >
        <div class="col-xs-4">
            <img class="fotos" src="../fotos/nba2k.jpg">
        </div>
        <div class="col-xs-8" id="principal3s">
            <h1 class="titulo">' . $nombre . '</h1>
                <span style="margin-left:5px;">2K Inc.</span>
            <div class="tags">
                <a href="http://localhost/baljala/public_html/juegos/categorias/deportes.php"><b>Deportes</a></b> </div>
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
            <span>2K Inc.</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Android</strong><br>
            <span>4.3 o +</span>               
        </div>
        <div class="col-xs-8" id="a">
            <strong>Apto</strong><br>
            <span>Todos</span>               
        </div>
    </div>
    <div class="row" id="buttond">
        <div class="col-xs-6">
               <a target="_blank" rel="external nofollow" href="http://evassmat.com/18932179/nba2k19-52-0-1apk" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://evassmat.com/18932179/nba2k19-52-0-1apkmega" id="megaapk"?id=X>APK Mega</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;" rel="external nofollow" href="http://evassmat.com/18932179/nba2k19-52-0-1obb" id="mediafireapk">OBB Mediafire</a>
        </div><div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;"  rel="external nofollow" href="http://evassmat.com/18932179/nba2k19-52-0-1obbmega" id="megaapk">OBB Mega</a>
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
    <p>' . $texto . '</p>
    </div>
    </div>
    <hr>
    <div class="row" id="n">
       <div class="col-xs-12">
        <h2>NECESARIO PARA LA INSTALACION</h2>
        </div>
           <div class="col-xs-12">
        <div class="esfile">
            <div class="ftesfile"><img src="../fotos/Esfile.jpg"></div>
            <div class="descripcion"><span>Es File Explorer Pro</span><br>
                <span id="t">7 MB</span></div>
        </div>       
        <br>
        </div>
            </div>
      <hr>
    <div class="row" id="informacion">
    <div class="col-xs-12">
        <h2>INFORMACION ADICIONAL</h2><br>
            </div>
        <div class="col-xs-12">
 <p>NBA 2K19 para Android es una gran opcion a la hora de elegir ente juegos de aventura. Algunas características de este son:
<ul>
<li>Nuevo modo HISTORIA – Experimenta la historia de algunos de los equipos y jugadores más famosos de la NBA.</li>
<li>Modo Mi CARRERA con una nueva historia e interacción con el equipo mejorada.</li>
<li>Controles simplificados para una mayor inmersión y mejor respuesta</li>
</ul></p>
     </div>';
          $texto1 = str_replace(" ", "-", $nombre);
    $texto_guion = str_replace(":", "", $texto1);
            $select = "SELECT COUNT(nombre) FROM version WHERE nombre = 'NBA 2K19' ORDER BY version.version DESC";
$dato = $conn->query($select);
$fila = mysqli_fetch_array($dato);
$count = $fila['COUNT(nombre)'];
if($count > 2){
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
    $selec = "SELECT * FROM version WHERE nombre = 'NBA 2K19'";
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
<script src="../js/escondite.js"></script>
';
?>
