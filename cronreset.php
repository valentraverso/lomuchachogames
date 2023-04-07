<?php
include_once 'includes/conection.php';


$borrar = "TRUNCATE TABLE tendencias";
$conn->query($borrar);
