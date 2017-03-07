<?php
include 'connection.php';
if(isset($_SESSION['login_user'])){
    $user_check = $_SESSION["login_user"];
}else{
    $user_check ='';
}

?>


