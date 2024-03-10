<?php
$n=$_POST['user'];
$e=$_POST['semail'];
$ph=$_POST['phone'];
$s=$_POST['subject'];
$d=$_POST['description'];

$_connect=mysqli_connect("localhost","root","","book_db");

$query="insert into enquery(username,email,phone,subject,description)value('$n','$e','$ph','$s','$d')";
mysqli_query($_connect,$query);

if(mysqli_affected_rows($_connect)>0){
    echo "insert successfully";
    header("location:enquery.php?enqueryrecorded");
}else{
    echo  "try again";
}

?>