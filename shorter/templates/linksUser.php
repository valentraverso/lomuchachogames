<?php
    $title = "Redirigiendo a destino... ";
    include $_SERVER['DOCUMENT_ROOT'].'/templates/header.php';
?>
<body>
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/templates/menu.php';
    ?>
    <div class="con">
        <div class="continue">

            <div style="height:10px;"></div>
            <div class="continueBox">
                    <?php echo '<p class="inDa">'.$s['name'].'</p>';?>
                 <p id="paatra">Espera <span id="countdown"></span> segundos para continuar. <br>(Para hacerlo más rapido toca una publcidad)</p>
                 <form action="" id="formulario" method="post">
                <button id="boton">Continuar</button>
                <p>Gana dinero con tus propios links -> <a href="http://corta.ml">Click ACA</a></p>
                </form>
                                <div class="boxBlack">
    <script src="https://apis.google.com/js/platform.js"></script>
<div class="g-ytsubscribe" data-channelid="UCiXuVZi9Av3ostlP-OtjniA" data-layout="full" data-count="default"></div>
                </div>
</div>
                <div style="height:10px;"></div>
<div onclick="fastContinue()">

</div>
            <span class="responsables">No somos responsables del destino del acortador, ya que a la página que usted se dirigue no es propiedad de ZFiles.</span>
        </div>
    </div>
    <script>
        var boton = document.getElementById('boton');
    
     boton.disabled = true;
     
     setTimeout(function(){
        boton.disabled = false;
        document.getElementById("formulario").action = "<?php echo $s['originalLink'];?>";
    }, 10000)
        window.onload = updateClock;
var totalTime = 10;
function updateClock() {
document.getElementById('countdown').innerHTML = totalTime;
if(totalTime==0){
    document.getElementById("paatra").innerHTML = "Ya puedes continuar.";
}else{
totalTime-=1;
setTimeout("updateClock()",1000);
}
}

function fastContinue(){
 boton.disabled = false;
 document.getElementById("formulario").action = "<?php echo $s['originalLink'];?>";
 document.getElementById("paatra").innerHTML = "Ya puedes continuar.";   
}
</script>
    <?php
    $idPost = $s['id'];
    
    include $_SERVER['DOCUMENT_ROOT'].'/includes/insightsUser.php';
    ?>
</body>