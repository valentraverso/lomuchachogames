
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Reed'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$texto = "<p>Reed - es una pequeña criatura y la última creación de un superordenador de edad.<p/>

<p>El viejo está muriendo superordenador por la pérdida de todos sus cubos y se está poniendo mucho más lento sin ellos.<p/>
<p>Sin superordenador, el mundo se va a acabar.<p/>

<p>Descargar<strong> Reed </strong>apk gratis para Android en LOMUCHACHOgames y ayudalo a salvar el mundo.<p/>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descarga Reed GRATIS par Android</title><meta name="description" content="DescargaReed GRATIS par Android en todas sus versiones en LOMUCHACHOgames.com"/> <meta name="keywords" content="Reed, PXLink, Android,"></head>
    <body>';
include_once '../php/menuentre.php';
echo '
    </div>
<div class="container-fluid">
    <div class="row" >
        <div class="col-xs-4">
            <img class="fotos" src="../fotos/reed.jpg">
        </div>
        <div class="col-xs-8" id="principal3s">
            <h1 class="titulo">' . $nombre . '</h1>
                <span style="margin-left:5px;">PXLink</span>
            <div class="tags">
                <a href="https://lomuchachogames.com/juegos/categorias/aventura.php"><b>Aventura</a></b> </div>
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
            <span>PXLink</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Android</strong><br>
            <span>4.0 o +</span>               
        </div>
        <div class="col-xs-8" id="a">
            <strong>Apto</strong><br>
            <span>Todos</span>               
        </div>
    </div>
    <div class="row" id="buttond">
        <div class="col-xs-6">
               <a target="_blank" rel="external nofollow" href="http://evassmat.com/18932179/r-2-0b-apk" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://evassmat.com/18932179/r-2-0b-apkmega" id="megaapk"?id=X>APK Mega</a>
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
 <p><p>LOMUCHACHOgames te da la posibilidad de elegir entre Mega y Mediafire para descargar tu juego favorito!!<p/>
<p>Reed para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:<p/>
<ul>
 	<li>Hermoso pixel arte gráfico</li>
 	<li>Fácil de controlar</li>
 	<li>Diferentes trampas</li>
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