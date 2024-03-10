<?php
$e=$_POST['email'];
$p=$_POST['pass'];

$_connect=mysqli_connect("localhost","root","","loginform");

$query="select * from login where email='$e' and password='$p'";
$r=mysqli_query($_connect,$query);

if($count==1){
    echo "Login successfully";
    session_start();
    while($key=mysqli_fetch_assoc($r)){
        $_SESSION['sess_name']=$key['username'];
        $_SESSION['sess_id']=$key['email'];
        $_SESSION['sess_phone']=$key['phone'];
        $_SESSION['sess_address']=$key['address'];
    }
    header("location:package.php?login_successfully");
}else{
    echo "Login failed";
    header("location:login.php?try_again");
}
?>