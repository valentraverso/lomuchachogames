<?php
/* Front End */
include_once '../templates/header/game.php';
include_once '../templates/menu/menuentre.php';

if($_GET['min'] == 0){
?>
</div>
<div class="co45as" style="min-height:450px;">
    <h1 style="margin-bottom:0px;">Pedir APK</h1>
    <div style="height:20px;"></div>
    <form method="post" action="https://lomuchachogames.com/includes/askGame.php" style="margin:0px;">
    <input type="radio" name="report" value="app"><span>App</span><br>
    <input type="radio" id="cheked" name="report" value="juego" checked><span>Juego</span>
    <p>¿Cual es la app o juego?</p>
    <input type="text" name="desc" maxlength="30" style="width:100%;" placeholder="Ej: Minecraft" required>
    <div style="height:20px;"></div>
    <input type="checkbox" required><span>¿Listo para enviar el pedido?</span>
    <div style="height:5px;"></div>
    <button>Enviar</button>
    </form>
</div>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header/footer.php'; 
?>
</body>
<?php
}else if($_GET['min'] == 1){
    ?>
    </div>
<div class="co45as" style="min-height:450px;">
    <h1>Juego o app pedido con exito</h1>
    <p><a href="https://lomuchachogames.com"><button style="padding:10px;">¿Volver al inicio?</button></a></p>
    </div>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header/footer.php'; 
}
?>
</body>