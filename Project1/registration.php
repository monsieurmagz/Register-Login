<?php      
include 'connection.php';
if(isset($_POST['submit'])){
    if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])){
        $regerr = "<script>alertify.alert('Error','Put All Required Fields', function(){alertify.error('Error!');});</script>";
    }else{
    $username = $_POST['username'];
    $username = mysqli_real_escape_string($conn,$username);
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($conn,$email);
    $password = $_POST['password'];
    $password = mysqli_real_escape_string($conn,$password);
    $query = "INSERT INTO `users`(username,password,email) VALUES ('$username','$password','$email')";
    $result = mysqli_query($conn,$query);
    if($result){
        $regsuc = "<script>alertify.alert('Success','You have been registered', function(){alertify.success('Success!');});</script>";
    }else{
        echo "Not inserted";
        mysqli_close($conn);
    }
   }
}
?>

