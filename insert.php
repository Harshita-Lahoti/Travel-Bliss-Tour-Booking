<?php
$n=$_POST['user'];
$e=$_POST['semail'];
$p=$_POST['pass'];
$ph=$_POST['phone'];
$a=$_POST['address'];

$_connect=mysqli_connect("localhost","root","","loginform");
$sql=mysqli_query($_connect,"SELECT * FROM login where Email='$e'");
if(mysqli_num_rows($sql)>0)
{
header("location:form.php?emailalreadyexist");
 exit;
}
else{
$query="insert into login(username,email,phone,address,password)value('$n','$e','$ph','$a','$p')";
mysqli_query($_connect,$query);

if(mysqli_affected_rows($_connect)>0){
    echo "insert successfully";
    header("location:login.php");
}else{
    echo  "try again";
}
}
?>