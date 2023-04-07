<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header/v1.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/menu/menu-lateral-android.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/menu/menu-up.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/conection-android.php';
?>
    <script>
  function agregar(){
      var add = document.querySelector('.add');
          if(add.id == "hiddenBox"){
          add.id = "showedBox";
          }else{
              add.id = "hiddenBox";
          }
  }  
</script>
<div class="micha">
    <div class="michaInside">
                <?php
        if(isset($_GET['success'])){
            $code = $_GET['success'];
            if($code == 1){
                ?>
                <div class="successBox">
                    <p>¡Atroden! Se agrego un elemento para subir.<span class="closeBox"><a href="https://admin.lomuchachogames.com/android/">X</a></span></p>
                </div>
                <?php
            }else if($code == 2){
                ?>
                <div class="successBox">
                    <p>¡Un elemento entro a la camara de gas! Se ha borrado con exito.<span class="closeBox"><a href="https://admin.lomuchachogames.com/android/">X</a></span></p>
                </div>
                <?php  
            }
        }
        ?>
        <div style="height:20px;"></div>
        <div class="fourColsHome">
            <div class="box boxMargin">
                    <?php
    $progreso = "SELECT * FROM apps";
$con = $conn->query($progreso);
$contado = mysqli_num_rows($con);
$progreso2 = "SELECT * FROM juegos";
$con2 = $conn->query($progreso2);
$contado2 = mysqli_num_rows($con2);
$totalprogress = $contado + $contado2;
?>
<div class="cardImgHome cardUploadHome">
    <i class="fa fa-upload"></i>
</div>
<div class="text-alignRight">
                <p class="titleBoxInfo" title="Meta de juegos y apps a subir">Objetivo</p>
                <span class="reachedScore"><?php echo $totalprogress ?>/800</span>
                </div>
            </div>
            <div class="box boxMargin">
                    <?php
    $getIncrease = "SELECT * FROM tendencias ORDER BY tendencias.int DESC";
    $getIncreaseC = $conn->query($getIncrease);
    $getIncreasef = mysqli_fetch_array($getIncreaseC);
    
    if(strpos($getIncreasef['url'], "apps") === false){
        $getIncreaseGame = "SELECT nombre FROM juegos WHERE link = '$getIncreasef[url]'";
        $getIncreaseGameC = $conn->query($getIncreaseGame);
        $getIncreaseGamef = mysqli_fetch_array($getIncreaseGameC);
    }else{
        $getIncreaseGame = "SELECT nombre FROM apps WHERE link = '$getIncreasef[url]'";
        $getIncreaseGameC = $conn->query($getIncreaseGame);
        $getIncreaseGamef = mysqli_fetch_array($getIncreaseGameC);
    }
    ?>
                <div class="cardImgHome cardIncreaseHome">
   <i class="fa fa-chart-line"></i>
</div>
<div class="text-alignRight">
                <p class="titleBoxInfo" title="Estadistica semanal">Tendencia</p>
                <span class="reachedScore"><?php echo $getIncreaseGamef['nombre'];?></span>
                </div>
            </div>
            <div class="box boxMargin">
                <?php
                $actualMonth = date("m");
                $actualYear = date("o");
                $getDates = "SELECT * FROM juegos WHERE fecha LIKE '%$actualYear-$actualMonth-%'";
                $getDatesC = $conn->query($getDates);
                $getDatesF = mysqli_num_rows($getDatesC);
                
                $getDatesA = "SELECT * FROM apps WHERE fecha LIKE '%$actualYear-$actualMonth-%'";
                $getDatesAC = $conn->query($getDatesA);
                $getDatesAF = mysqli_num_rows($getDatesAC);
                ?>
                <div class="cardImgHome cardCalendarHome">
                <i class="far fa-calendar"></i>
                </div>
                <div class="text-alignRight">
                <p class="titleBoxInfo" title="Juegos y apps subidos este mes">Subidos</p>
                <span class="reachedScore"><?php echo $getDatesF + $getDatesAF;?></span>
                </div>
            </div>
            <div class="box boxMargin">
                <div class="cardImgHome cardEarningsHome">
                <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="text-alignRight">
                <p class="titleBoxInfo" title="Ganancias de este mes(solo metricas de Adsense)">Ganancias</p>
                <span class="reachedScore">$95,36</span>
                </div>
            </div>
        </div>
        <div style="height:10px;"></div>
        <div class="twoColsHome">
    <div class="box boxMargin">
        <span class="spanTitleReport">Reporte de actualización o error</span>
        <div class="reportList">
        <div class="reportListHeader">
            <ul>
            <li><b>Nombre</b></li>
            <li><b>Descripción</b></li>
            <li><b><?php
if (empty($_GET['reportdate'])) {
    echo '<a href="https://admin.lomuchachogames.com/android/?reportdate=asc" id="canvas">Fecha ⬇</a>';
    $reportOrder = "ORDER BY id DESC";
} else if ($_GET['reportdate'] == 'asc') {
    echo '<a href="https://admin.lomuchachogames.com/android/" id="canvas">Fecha ⬆</a>';
    $reportOrder = "ORDER BY id ASC";
}
?></b><span class="orderCanvas" id="showedCanvas">Ordena fecha de mas reciente a mas antigua o de mas antigua a más reciente.</span></li>
            <li><b>Opciones</b></li>
            </ul>
        </div>
        <div class="reportListBody">
        <?php
$report     = "SELECT * FROM report $reportOrder, timeReported DESC";
$reportConn = $conn->query($report);

while ($rFetch = mysqli_fetch_array($reportConn)) {
    switch ($rFetch['tipo']) {
        case "juego":
            $tipo = "juegos";
            break;
        case "app":
            $tipo = "apps";
            break;
    }
    $get     = "SELECT nombre FROM $tipo WHERE id = '$rFetch[idpost]'";
    $getConn = $conn->query($get);
    $gFetch  = mysqli_fetch_array($getConn);
?>

  <ul>
    <li><?php
    echo $gFetch['nombre'];
?></li>
    <li><?php
    echo $rFetch['desc'];
?></li>
    <li><?php
    echo $rFetch['fecha'];
?></li>
    <li><button><a href="https://lomuchachogames.com/includes/report?act=<?php
    echo $rFetch['id'];
?>">Borrar</a></button></td>
  </ul>
            
            <?php
}
?>
      </div>
        </div>
    </div>
    <div class="box boxMargin">
              <span class="spanTitleReport">Pedidos juego/app</span>
        <div class="askList">
        <div class="askListHeader">
            <ul>
            <li><b>Tipo</b></li>
            <li><b>Titulo</b></li>
            <li><b>Opciones</b></li>
            </ul>
        </div>
        <div class="asktListBody" style="height:200px;overflow-y: scroll;">
        <?php
$report = "SELECT * FROM askGame ORDER BY quantity DESC, id DESC";
$reportConn = $conn->query($report);

while ($rFetch = mysqli_fetch_array($reportConn)) {
?>
  <ul>
    <li><?php
    echo $rFetch['tipo'];
?></li>
    <li><?php
    echo $rFetch['desc'];
?></li>
    <li><button><a href="https://lomuchachogames.com/includes/askGame?act=<?php
    echo $rFetch['id'];
?>">Borrar</a></button></td>
  </ul>
            
            <?php
}
?>
      </div>
        </div>
        </div>
        <div class="box boxMargin">
        <span class="spanTitleReport">Pendientes de subida</span><span onclick="agregar()" id="addHover">  + Agregar</span>
        <div class="add" id="hiddenBox">
            <form action="https://lomuchachogames.com/includes/reports/pendiente?auth=upload" method="post">
                <input type="text" name="name" placeholder="nombre" autocomplete="off">
                <select name="tipo">
                    <option>Elegir...</option>
                    <option value="juego">Juego</option>
                    <option value="app">App</option>
                    <option value="tarea">Tarea</option>
                </select>
                <input type="submit" value="agregar" class="btt">
            </form>
        </div>
        <div class="reportList">
        <div class="reportListHeader threeCols">
            <ul>
            <li><b>Nombre</b></li>
            <li><b>Tipo</b></li>
            <li><b>Opciones</b></li>
            </ul>
        </div>
        <div class="reportListBody threeCols">
        <?php
$carg = "SELECT * FROM pendiente WHERE (tipo = 'juego') OR (tipo = 'app') ORDER BY pendiente.id DESC LIMIT 15";
$cargda = $conn->query($carg);

while ($gFetch = mysqli_fetch_array($cargda)) {
    
?>

  <ul>
    <li><?php
    echo $gFetch['nombre'];
?></li>
    <li><?php
    echo $gFetch['tipo'];
?></li>
    <li><button><a href="https://lomuchachogames.com/includes/reports/pendiente?auth=delete&act=<?php
    echo $gFetch['id'];
?>">Borrar</a></button></td>
  </ul>
            
            <?php
}
?>
      </div>
        </div>
    </div>
</div>
</div>
</div>
        <script>
        window.onload=function()
        {
            var elemento=document.getElementById("canvas");
            elemento.onmouseover = function(e) {
                document.getElementById("showedCanvas").style="display:block;";
            };
            elemento.onmouseout = function(e) {
                document.getElementById("showedCanvas").style="display:none;";
            };
        }
        </script>