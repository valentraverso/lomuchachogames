<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header/v1.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/menu-lateral-short.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/menu-up.php';
?>
<div class="micha">
    <div class="michaInside">
        <div class="rightAngle">
            <div style="height:10px;"></div>
            <div class="box">
              <div class="angles">
                <div class="leftAngle">
                    <form action="http://shorter.lomuchachogames.com/includes/insert-link.php" method="post">
                <input type="hidden" name="verifier" value="353535">
                <input type="text" name="name" placeholder="Nombre del juego o archivo">
                <input type="text" name="oL" placeholder="Link de descarga">
                <select name="page" required>
                    <option>Seleccionar pagina</option>
                    <option value="lomuchachogames">LOMUCHACHOgames</option>
                    <option value="pc-lomuchachogames">LOMUCHACHOgames PC</option>
                </select>
                <?php 
                if(isset($_GET['link'])){
                    echo '<div class=yourLink"><p> Este es tu Link:</p><p>'.$_GET['link'].'</p></div>';
                }
                ?>
                </div>
                 <div class="rightAngle">
                 <button class="readyButton">Acortar</button>
                 </form>
                 </div>
                </div>
                </div>
    </div>
    </div>
</div>