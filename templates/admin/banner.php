<?php
include_once '../includes/conection.php';
?>
<html>
    <head>
        <title>Renovar banner - LOMUCHACHOgames</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximium-scale=1">

        <link rel="icon" type="image/png" href="https://lomuchachogames.com/fotos/LOMUCHACHOgames.png"/>

        <link rel="stylesheet" href="https://lomuchachogames.com/css/general.css?v=3.0">
        <link rel="stylesheet" href="https://lomuchachogames.com/css/bienvenido.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
<body style="height:100%;">
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/admin/menu/menu.php';
?>
<div class="dios">
            <form enctype="multipart/form-data" action="https://lomuchachogames.com/includes/newbanner" method="post">
                <div class="row todo">
                    <?php
if (isset($error)) {
    echo $error;
}
?>
                  <div class="col-md-10">
                        <div class="parte">
                            <div class="insides">
                            <h3 style="padding: 10px;
                                text-decoration: none;
                                color: white;
                                font-weight: bold;
                                display: inline-block;
                                margin-top:-22px;
                                border-right: 30px solid transparent;
                                border-bottom: 30px solid #4c4c4c; 

                                height: 0;
                                line-height: 50px;"> Banner </h3>
                                <div class="col-md-6">
                            <label style="margin-bottom: -2px;">Nombre del Juego</label><br>
                            <input id="nombre" class="form-control" name="nombre" placeholder="Minecraft, GTA o etc..." required></div>
                            <div class="col-md-6">
                            <label style="margin-bottom: -2px;">Minitexto</label><br>
                            <input name="texto" id="texto" class="form-control" type="text" placeholder="Maximo de 20 palabras"></div>
                                                        <label>Texto posicion</label>
                                                    <select name="align" id="align" onclick="salame()">
                            <option value="left">Izquierda</option>
                            <option value="right">Derecha</option>
                        </select>
                                                        <div class="col-md-6">
                            <label style="margin-bottom: -2px;">Link de imagen</label><br>
                            <input name="imagen" id="sadoma" class="form-control" type="text" placeholder="Buscar imagen en google"></div>
                            <label style="margin-bottom: -2px;">Posicion Imagen</label><br>
                            <input name="posicion" id="position" class="form-control" type="text" placeholder="Valor: top-center-bottom o numeros con px"></div>
                                                        <label style="margin-bottom: -2px;">Link del juego</label><br>
                            <input name="link" class="form-control" type="text" placeholder="https://..."></div>
                                                        <div class="insides">
                        <div class="imga">
                            <div class="arriba" id="f" style="height:190px;width:375px;background:url('https://codyhouse.co/demo/squeezebox-portfolio-template/img/img.png');background-repeat: no-repeat; background-size: cover; background-position: top;"><div class="arriba-texto" style="top:0px;" id="t"><h3 id="sado">Nombre del juego</h3><p id="brasu">Hola soy un texto.</p></div></div>
                        </div></div></div>
                                            <div class="parte padding_dos" style="height:150px;">
                                                <div class="imga">
                                                    <p>Verifica antes de completar</p>
                                <input class="gonzaloh" type="submit" value="Publicar">
                                                        </form>
                                </div>
                                </div></div>
                    <script>
document.getElementById("nombre").onchange = function(value){
    document.getElementById("sado").innerHTML = document.getElementById("nombre").value;
}              
document.getElementById("sadoma").onchange = function(e) {
        document.getElementById("f").style.backgroundImage = "url('"+document.getElementById("sadoma").value+"')";
} 
document.getElementById("texto").onchange = function(value) {
        document.getElementById("brasu").innerHTML = document.getElementById("texto").value;
}
function salame(){
    document.getElementById("t").style.cssFloat = document.getElementById("align").value;
}
document.getElementById("position").onchange = function(value) {
        document.getElementById("f").style.backgroundPosition = document.getElementById("position").value;
}
</script>