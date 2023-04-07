<?php include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php'; ?>
<head>
    <meta name="googlebot" content="noindex">
<meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, maxium-scale=1, user-scalable=no">
       <!--  Todos los CSS -->
       <link rel="icon" type="image/png" href="../fotos/LOMUCHACHOgames.png"/>
       <link rel="stylesheet" href="../css/menu.css" type="text/css">
       <link rel="stylesheet" href="../css/bienvenido.css" type="text/css">
           <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
<title>Apps - LOMUCHACHOgames</title>
<meta name="googlebot" content="noindex">
   </head><body><style>
    .botones{
        float:right;
        margin-top:-70px;
    }
    .botones input{
        margin-bottom:4px;
                font-size:12px;
    }
    .infobusca{
        width:500px;
    }
    .pag{
        font-size:20px;
    }
    .paginacion{
        display:flex;
        border-top:1px solid #ddd;
        border-radius:5px;
        margin-top:15px;
    }
    .paginacion p{
        margin-right:5px;
    }
</style>
         <?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/menu/menu.php'; ?>
         <div class="dios">
           <?php
           echo '<div class="buscado">
    <div style="height:30px;">
    <h2  style="float:left">Juegos y Apps</h2><button class="btn btn-success"style="font-size:15px;float:left;margin-top:2px;margin-left:30px;"><a href="https://lomuchachogames.com/admin/juegos.php?pagina=1">Juegos</a></button><input style="width:40%;float:right;"  type="text" class="form-control" id="form"><button type="button" id="boton" style="margin-top:8px;float:right;" class="btn btn-warning">Buscar</button></div>';
    ?>
            </div>
              <div class="paginacion">
            <?php 
            $pagina = $_GET['pagina'];
$request = "SELECT COUNT(*) as todo FROM apps";
$to = $conn->query($request);
$number = mysqli_fetch_assoc($to);
$total_paginas = ceil($number['todo']/ 50); 
$final = $total_paginas;
if($final >= 0){
    for ($i=1;$i<=$final;$i++){ 
        if ($pagina == $i) {
        echo "<p class=\"pag\" style=\"text-decoration: underline;\">".$pagina . "</p> "
            ;}
        else{
            echo "<p class=\"pag\"><a href='https://lomuchachogames.com/nueva/admin/juegos.php?pagina=" . $i . "'>" . $i . "</a></p>"; 
        }
        }
}
            ?>
            </div>
            <div class="busca">
<?php
$menor = $pagina -1;
$pag = $menor * 50;
$result = "SELECT * FROM apps ORDER BY apps.id DESC limit $pag,50";
$data = $conn->query($result);
while($fila = mysqli_fetch_array($data)){
echo '            
<a href="' . $fila['link'] . '">
    <div class="dentrobusca" style="height:100px;">
        <div class="id" style="float:left;margin-top:27px;font-size:15px;width:20px;">
 <span>' . $fila['id'] . '</span>    
</div>
        <div class="imgbusca" style="margin-left:10px;">
            <img src="../' . $fila['texto'] . '">
        </div>     
        <div class="infobusca" style="margin-left:115px;">
            <div class="infoarriba">
                <div class="buscatextos">
                    <b>' . $fila['nombre'] . '</b>
                </div>
                <div class="creadorbusca">
                    <span>' . $fila['creador'] . '</span>
                </div>
            </div>
            <br>
            <div class="infoabajo" style="margin-top:-12px;">
                    <span><strong>' . $fila['version'] . '</strong></span><br>
                 <span>' . $fila['tamano'] . '</span>       
            </div>
        </div>
            </a>
            <div class="botones">
            <form method="GET" action="https://lomuchachogames.com/admin/editapp.php" enctype="multipart/form-data" >
            <input type="text" name="name" value="' . $fila['nombre'] . '" style="display:none;">
            <input type="submit" value="Editar" class="btn btn-outline-primary"><br>
            </form>
               <form method="GET" action="https://lomuchachogames.com/includes/delete.php" enctype="multipart/form-data" >
            <input type="text" name="name" value="' . $fila['nombre'] . '" style="display:none;">
            <input type="submit" value="Borrar" class="btn btn-outline-danger" style="float:right">
</form>
</div>
    </div>
    ';}
?>
</div>
<script>
const productos = [
<?php
$resul = "SELECT * FROM apps";
$dat = $conn->query($resul);
while($f = mysqli_fetch_array($dat)){
    echo '{nombre: "'.$f['nombre'].'", id: \''.$f['id'].'\', peso: \''.$f['tamano'].'\', link: "'.$f['texto'].'", url: "'.$f['link'].'", creador: "'.$f['creador'].'", version: \''.$f['version'].'\'}, ';
}
?>
]

    const form = document.querySelector('#form');
    const boton = document.querySelector('#boton');
    const resultado = document.querySelector('.busca');

    const filtrar = ()=>{
        resultado.innerHTML= '';
        const texto = form.value.toLowerCase();
        for(let producto of productos){
            let nombre = producto.nombre.toLowerCase();
            if(nombre.indexOf(texto) !== -1){
             resultado.innerHTML += 
             ` <a href="${producto.url}">
    <div class="dentrobusca">
        <div class="id" style="float:left;margin-top:27px;font-size:15px;">
 <span>${producto.id}</span>    
</div>
        <div class="imgbusca" style="margin-left:10px;">
            <img src="../${producto.link}">
        </div>     
        <div class="infobusca" style="margin-left:115px;width:300;">
            <div class="infoarriba">
                <div class="buscatextos">
                    <b>${producto.nombre}</b>
                </div>
                <div class="creadorbusca">
                    <span>${producto.creador}</span>
                </div>
            </div>
            <br>
            <div class="infoabajo" style="margin-top:-12px;">
                    <span><strong>${producto.version}</strong></span><br>
                 <span>${producto.version}</span>       
            </div>
        </div>
            </a>
            <div class="botones">
            <form method="GET" action="../include/editapp.php" enctype="multipart/form-data" >
            <input type="text" name="name" value="${producto.nombre}" style="display:none;">
            <input type="submit" value="Editar" class="btn btn-outline-primary"><br>
            </form>
               <form method="GET" action="../include/delete.php" enctype="multipart/form-data" >
            <input type="text" name="name" value="${producto.nombre}" style="display:none;">
            <input type="submit" value="Borrar" class="btn btn-outline-danger" style="float:right">
</form>
</div>
    </div>`;
            }
        }
        if(resultado.innerHTML === ''){
            resultado.innerHTML +=
            `<p style="font-size:20px; font-weight:bold;">¡No hay resultados!😔</p>`;
        }
    }

boton.addEventListener('click', filtrar);
form.addEventListener('keyup', filtrar);
</script>
         </div>