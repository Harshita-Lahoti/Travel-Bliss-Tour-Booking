<?php

$id=$_REQUEST['q'];
$con=mysqli_connect("localhost","root","","book_db");
$q="delete from book_form where id='$id'";
mysqli_query($con,$q);

if(mysqli_affected_rows($con)>0){
    header("location:mybook.php");
}else{
    echo  "try again";
}

?>