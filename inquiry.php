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
<link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
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
session_start();
include 'header.php'
?>
<?php
if (isset($_REQUEST['enqueryrecorded'])) {
   ?>
   <script>
	window.alert("enquery successfully submitted");
   </script>
<?php
}
?>

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Inquiry Form</h1>
</div>
    <section class="booking">

<form action="inqins.php" method="post" class="book-form" onsubmit="return validation()">

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
         <span>Phone :</span>
         <input type="number" placeholder="enter your phone number" required="required" name="phone">
      </div>
      <div class="inputBox">
         <span>Subject :</span>
         <input type="text" placeholder="enter your subject" required="required" name="subject">
      </div>
      <div class="inputBox">
         <span>Description :</span>
         <input type="text" placeholder="enter your description" required="required" name="description">
      </div>
      

   </div>

   <input type="submit" class="h1">

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