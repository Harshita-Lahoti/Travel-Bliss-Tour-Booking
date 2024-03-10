<?php
    $insert=false;

    $connect=mysqli_connect("localhost","root","","book_db");
    if(isset($_POST['name'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $location=$_POST['location'];
        $guests=$_POST['guests'];
        $pprice=$_POST['pprice'];
        $price=$_POST['price'];
        $arrivals=$_POST['arrivals'];
        $leaving=$_POST['leaving'];
 
        $request=("insert into `book_form` (`name`, `email`, `phone`, `address`, `location`, `guests`, `pprice`, `price`, `arrivals`, `leaving`) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$pprice', '$price', '$arrivals', '$leaving');");

        mysqli_query($connect,$request);
        
        if(mysqli_affected_rows($connect)>0){
            echo "insert successfully";
            header('location:book.php?booked_successfully');
        }else{
            echo  "try again";
        }
    }
?>