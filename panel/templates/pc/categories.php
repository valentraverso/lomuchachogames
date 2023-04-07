<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header/v1.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/menu-lateral-pc.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/menu-up.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection-pc.php';
?>
<div style="height:20px;"></div>
<div class="micha">
    <div class="michaInside">
        <div class="rightAngle">
        <div class="box">
            <p>Agregar categorias</p>
            <form action="https://admin.lomuchachogames.com/includes/pc/addcategories.php" method="post">
            <input type="text" name="newCat" placeholder="Escribir nombre de categoria"> 
            <button>Agregar</button>
            </form>
        </div>
        <div style="height:20px;"></div>
        <div class="box">
            <p>Todas las categorias</p>
            <?php
            $selectCat = "SELECT * FROM categories";
            $selectCatConn = $conn->query($selectCat);

            $host= $_SERVER["HTTP_HOST"];
            $url= $_SERVER["REQUEST_URI"];
            
            while($f = mysqli_fetch_array($selectCatConn)){
                echo "<div class='cat'><span>$f[title]</span><button class='btnRight'><a href='http://admin.lomuchachogames.com/includes/multiple/delete?device=pc&table=categories&id=$f[id]&link=http://".$host.$url."'>Borrar</a></button></div>";
            }
            ?>
        </div>
    </div>
    </div>
</div>