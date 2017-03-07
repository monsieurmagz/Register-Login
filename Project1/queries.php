<?php
include 'connection.php';
if(isset($_SESSION['login_user'])){ 
    $user_check = $_SESSION["login_user"];
    
}else{
    $user_check = '';
}   
$userinfo = mysqli_query($conn,"select * from users where username = '$user_check'");
$rows = mysqli_fetch_assoc($userinfo);
$user_data = $rows['username'];
$user_data = $rows['password'];
$user_data = $rows['email'];

?>  


