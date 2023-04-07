
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Clue'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$texto = "<p>Únete a la señorita Amapola, al coronel Rubio, al señor Prado, a la doctora Orquídea y al profesor Mora en una noche de misterios y asesinatos en la mansión Tudor.<p/>

<p>Tira el dado, muévete por la habitación y haz preguntas. \"¡Yo creo que ha sido la señorita Amapola con la cuerda en el estudio.<p/>

<p>Descargar<strong> Clue </strong>apk gratis para Android en LOMUCHACHOgames y encuentra al asesino, haz deducciones brillantes y resuelve el crimen antes que nadie.<p/>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descarga Clue GRATIS par Android</title><meta name="description" content="Descarga Clue GRATIS par Android en todas sus versiones en LOMUCHACHOgames.com"/> <meta name="keywords" content="Clue, Marmalade Game Studio, Android,"></head>
    <body>';
include_once '../php/menuentre.php';
echo '
    </div>
<div class="container-fluid">
    <div class="row" >
        <div class="col-xs-4">
            <img class="fotos" src="../fotos/clue.jpg">
        </div>
        <div class="col-xs-8" id="principal3s">
            <h1 class="titulo">' . $nombre . '</h1>
                <span style="margin-left:5px;">Marmalade Game Studio</span>
            <div class="tags">
                <a href="https://lomuchachogames.com/juegos/categorias/casual.php"><b>Casual</a></b> </div>
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
            <span>Marmalade Game Studio</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Android</strong><br>
            <span>5.0.o +</span>               
        </div>
        <div class="col-xs-8" id="a">
            <strong>Apto</strong><br>
            <span>+10</span>               
        </div>
    </div>
    <div class="row" id="buttond">
        <div class="col-xs-6">
               <a target="_blank" rel="external nofollow" href="http://evassmat.com/18932179/c-2-4-1-apk" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://evassmat.com/18932179/c-2-4-1-apkmega" id="megaapk"?id=X>APK Mega</a>
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
 <p><p>Clue para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:<p/>
<ul>
 	<li>Usa la innovadora hoja de pistas virtual para tomar notas y descartar pistas falsas.</li>
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