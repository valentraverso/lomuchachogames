<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'conection.php';

$user = $_POST['user'];
$pass = md5($_POST['password']);

$selectUser = "SELECT username FROM users WHERE username = '$user'";
$selectUserConn = $conn->query($selectUser);
$selectUserNum = mysqli_num_rows($selectUserConn);

if($selectUserNum == 1){
    $selectBoth = "SELECT * FROM users WHERE username = '$user' AND contrasena = '$pass'";
    $selectBothConn = $conn->query($selectBoth);
    $selectBothNum = mysqli_num_rows($selectBothConn);
    
    if($selectBothNum == 1){
       session_start();
       
       $_SESSION['user'] = $user;
       
       header("location:http://admin.lomuchachogames.com");
    }else{
        header("location:http://admin.lomuchachogames.com?error=1");
    }
}else{
    header("location:http://admin.lomuchachogames.com?error=1");
}