<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header/v1.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/menu-lateral-short.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/menu-up.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection-shorter.php';
?>
<div class="micha">
    <div class="michaInside">
            <div style="height:10px;"></div>
                <div class="twoColumnsInsideBox">
                <div class="choosePage">
                    <p>Busca un Enlace:</p>
                    <form action="" method="get">
                      <input type="hidden" name="page" value="<?php echo $_GET['page'];?>"> 
                      <input type="text" name="term" value="<?php echo $_GET['term'];?>">  
                    </form>
                    <ul>
                        <li style="border-bottom:1px solid #afa1a1;"><a href="https://admin.lomuchachogames.com/shorter/links?page=lomuchachogames">LOMUCHACHOgames</a></li>
                        <li><a href="https://admin.lomuchachogames.com/shorter/links?page=pc-lomuchachogames">PC LOMUCHACHOgames</a></li>
                    </ul>
                </div>
              <div class="reportList">
        <div class="reportListHeader threeColsD">
            <ul>
            <li><b>Nombre</b></li>
            <li><b>Links</b></li>
            <li><b>Opciones</b></li>
            </ul>
        </div>
        <div class="reportListBodyNone threeColsD">
            <?php
            if(isset($_GET['term'])){
                $vPage = "WHERE page = '$_GET[page]' AND name LIKE '%$_GET[term]%'";
            }else{
                $vPage = "WHERE page = '$_GET[page]'";
            }
            $selectShorter =  "SELECT * FROM links $vPage";
            $selectShorterC = $conn->query($selectShorter);
            while($s = mysqli_fetch_array($selectShorterC)){
                ?>
                         <ul>
    <li><?php echo $s['name']; ?></li>
    <li class="linkzone"><b><a href="<?php echo $s['shorterLink'];?>"><?php echo $s['shorterLink']; ?></a></b><br><a href="<?php echo $s['originalLink']; ?>"><?php echo $s['originalLink']; ?></a></li>
    <li><button><a href="">Editar</a></button><button><a href="">Borrar</a></button>
  </li></ul>
  <hr>
                <?php
            }
            ?>
   </div>
   </div>
            </div>
    </div>
</div>