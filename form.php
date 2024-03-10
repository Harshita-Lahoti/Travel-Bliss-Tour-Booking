<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link rel="icon" type="text/css" href="flowerimg.jpg">
     <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">
    <style>
.c1{
    margin-left: 12px;
}

.d1{
    margin-right: 12px;
    width: 441px;
}

#i2{
    margin-top: 21px;
}

.b1{
    width: 113px;
}

#b2{
    background-color: blue;
    color: white;
}

.bagc{
    background-color: black;
    color: white;
    font-size: 23px;
}
.h1{
    display: inline-block;
    background: var(--black);
    margin-top: -9rem;
    color: var(--white);
    font-size: 1.7rem;
    padding: 1rem 3rem;
    cursor: pointer;
    text-decoration:none;
}

    </style>
</head>
<body>
<?php
include 'header.php'
?>
<?php
if (isset($_REQUEST['emailalreadyexist'])) {
   ?>
   <script>
	window.alert("Email Id Already Exists");
   </script>
<?php
}
?>

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Register</h1>
</div>
    <section class="booking">

<form action="insert.php" method="post" class="book-form" onsubmit="return validation()">

   <div class="flex">
      <div class="inputBox">
         <span>UserName :</span>
         <input type="text" placeholder="enter your name" required="required" name="user">
      </div>
      <div class="inputBox">
         <span>Email :</span>
         <input type="email" placeholder="enter your email" required="required" name="semail">
      </div>
      <div class="inputBox">
         <span>phone :</span>
         <input type="number" placeholder="enter your phone number" required="required" name="phone">
      </div>
      <div class="inputBox">
         <span>address :</span>
         <input type="text" placeholder="enter your address" required="required" name="address">
      </div>
      <div class="inputBox">
         <span>Password :</span>
         <input type="password" placeholder="enter your password" required="required" name="pass">
      </div>
      

   </div>

   <input type="submit" class="h1">
   <p><h3>Already have account <a href="login.php">Login</a></h3> </p>

</form>

</section>

     <script>
        function validation(){
            var id=document.f1.user.value;
            var ps=document.f1.pass.value;
            if(id.length==""&& ps.length==""){
                alert("Username and Password field is empty");
                return false;
            }
            else{
                if(id.length==""){
                    alert("Username field is empty");
                    return false;
                }
                if(ps.length==""){
                    alert("Password field is empty");
                    return false;
                }
            }
        }
    </script>

<?php
    include 'footer.php'
?>
</body>
</html>