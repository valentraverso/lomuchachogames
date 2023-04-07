<?php
$banner = "SELECT nombre FROM pendiente WHERE tipo = 'banner'";
$pirlp = $conn->query($banner);
$b = mysqli_fetch_array($pirlp);

$b = explode(",", $b['nombre']);
?>
<style>
            .arriba{background:url('<?php echo $b[3] ;?>');background-repeat: no-repeat;background-size: cover;background-position: <?php echo $b[4] ;?>;}.arriba-texto{float: <?php echo $b[2] ;?> !important;}
        </style>
                    <a href=" <?php echo $b[5] ;?>">
            <div class="arriba">
    <div class="arriba-texto">
        <h3><b><?php echo $b[0] ;?></b></h3>
        <p><?php echo $b[1] ;?></p>
    </div>
</div>
 </a>