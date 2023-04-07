<?php
if(!empty($_GET['id']) & !empty($_GET['tipo'])){
$title = "Reportar - LOMUCHACHOgames";

/* Front End */
include_once '../templates/header/game.php';
include_once '../templates/menu/menuentre.php';

if($_GET['min'] == 0){
?>
</div>
<div class="co45as" style="min-height:450px;">
    <h1 style="margin-bottom:0px;">Reportar</h1>
    <div style="height:20px;"></div>
    <form method="post" action="https://lomuchachogames.com/includes/report.php" style="margin:0px;">
    <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
    <input type="hidden" name="tipo" value="<?php echo $_GET['tipo']?>">
    <input type="radio" name="report" value="act" onclick="clickad()"><span>Nueva versión</span><br>
    <input type="radio" id="cheked" name="report" value="error" onclick="clickad()"><span>Error del APK</span>
    <div style="display:none;" id="desc">
    <p>¿Cual es el problema?</p>
    <textarea style="width:100%;height:60px;" name="desc"></textarea>
    </div>
    <div style="height:20px;"></div>
    <input type="checkbox" required><span>¿Listo para enviar el informe?</span>
    <div style="height:5px;"></div>
    <button>Enviar</button>
    </form>
</div>
<script>

   function clickad(){
    if(document.getElementById("cheked").checked){
        document.getElementById("desc").style = "display:block";
    }else{
        document.getElementById("desc").style = "display:none";
    }
   }
</script>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header/footer.php'; 
?>
</body>
<?php
}else if($_GET['min'] == 1){
    include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
    $select = "SELECT link FROM juegos WHERE id = '$_GET[id]'";
    $sConn = $conn->query($select);
    $sFetch = mysqli_fetch_array($sConn);
    ?>
    </div>
<div class="co45as" style="min-height:450px;">
    <h1>Juego reportado con exito</h1>
    <p><a href="<?php echo $sFetch['link'] ?>"><button style="padding:10px;">¿Volver al juego?</button></a></p>
    </div>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header/footer.php'; 
?>
</body>
    <?php
}else{
    header("location:https://lomuchachogames.com");
}
}else{
    header("location:https://lomuchachogames.com");
}
?>