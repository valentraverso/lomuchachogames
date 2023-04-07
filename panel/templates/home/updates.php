<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header/v1.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/menu-lateral-home.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/menu-up.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/conection.php';
?>
<style>
    textarea{width:100%;}
</style>
<div style="height:20px;"></div>
<div class="micha">
    <div class="michaInside">
        <span class="spanTitleReport boxMargin">Actualizaciones del administrador</span>
        <div style="height:10px"></div>
        <div class="rightAngle">
        <div class="box">
        <div class="updateRequest">
            <form action="https://admin.lomuchachogames.com/includes/home/updateRequest.php" method="post" name="updateRequest">
                <input type="hidden" name="code" value="0">
                <p class="tagModify">¿Que quieres actualizar?</p>
                <textarea placeholder="Que deseas actualizar..." name="text"></textarea>
                <div style="height:10px"></div>
                <p class="tagModify">Pagina especifica</p>
                <select name="page">
                    <option value="">Ninguna</option>
                    <option value="lomuchachogames">LOMUCHACHOgames</option>
                    <option value="pc-lomuchachogames">PC LOMUCHACHOgames</option>
                </select>
                <button>Listo</button>
            </form>
        </div>
        </div>
        <div style="height:20px"></div>
        <div class="box">
            <span class="spanTitleReport">Actualizaciones sin completar</span>
            <div class="reportList">
        <div class="reportListHeader threeCols">
            <ul>
            <li><b>Descripción</b></li>
            <li><b>Pagina</b></li>
            <li><b>Opciones</b></li>
            </ul>
        </div>
        <div class="reportListBody threeCols">
            <?php
            $selectUpdate = "SELECT * FROM updates WHERE status = '0' ORDER BY id DESC";
            $selectUpdateC = $conn->query($selectUpdate);
            
            while($s = mysqli_fetch_array($selectUpdateC)){
            ?>
  <ul>
    <li><?php echo $s['text'];?></li>
    <li><?php echo $s['page'];?></li>
    <li><button><a href="https://admin.lomuchachogames.com/includes/home/updateRequest?code=1&id=<?php echo $s['id'];?>">Actualizado</a></button>
  </li></ul>
              <?php 
            }
            ?>
                  </div>
        </div>
        </div>
        <div style="height:20px"></div>
        <div class="box">
            <span class="spanTitleReport">Actualizaciones completadas</span>
            <div class="reportList">
        <div class="reportListHeader threeCols">
            <ul>
            <li><b>Descripción</b></li>
            <li><b>Pagina</b></li>
            <li><b>Opciones</b></li>
            </ul>
        </div>
        <div class="reportListBody threeCols">
            <?php
            $selectUpdate = "SELECT * FROM updates WHERE status = '1' ORDER BY id DESC";
            $selectUpdateC = $conn->query($selectUpdate);
            
            while($s = mysqli_fetch_array($selectUpdateC)){
            ?>
  <ul>
    <li><?php echo $s['text'];?></li>
    <li><?php echo $s['page'];?></li>
    <li><button><a href="https://admin.lomuchachogames.com/includes/home/updateRequest?code=2&id=<?php echo $s['id'];?>">Volver a listar</a></button>
  </li></ul>
              <?php 
            }
            ?>
                  </div>
        </div>
        </div>
        </div>
</div>
</div>