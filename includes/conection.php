<?php
$hostname="";
$username="";
$password="";
$dbname="";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(!$conn){
    die ("No se pudo conectar");
}
