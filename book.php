<?php
session_start();

if(!isset($_SESSION['sess_name'])){
   
   header("location:form.php?direct_access");
}

if(isset($_REQUEST['q'])){
$pid=$_REQUEST['q'];

$c=mysqli_connect("localhost","root","","book_db");
$q="select * from package where pid='$pid'";
$result=mysqli_query($c,$q);

$key=mysqli_fetch_array($result);
$pname=$key['pname'];
$price=$key['price'];

}else{
   $price="";
   $pname="";
}

$n=$_SESSION['sess_name'];
$e=$_SESSION['sess_id'];
$p=$_SESSION['sess_phone'];
$a=$_SESSION['sess_address'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
   <script  type="text/javascript">
        function fun3() {
            let x, y, z;
            x = for1.a1.value;
            y = for1.b1.value;
            z = parseInt(x) * parseInt(y);
            for1.r1.value = "" + z;
        }

        function fun(ddl){
         let id=document.getElementById('s1').value;
         for1.a1.value=""+id;
         document.getElementById('make_text').value=ddl.options[ddl.selectedIndex].text;
        }
    </script>
    <style>
      .h1{
         display: inline-block;
         background: var(--black);
         margin-top: 3rem;
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
if (isset($_REQUEST['booked_successfully'])) {
   ?>
   <script>
	window.alert("Your package booked successfully");
   </script>
<?php
}
?>
<!-- header section starts  -->

<?php
include 'header.php'
?>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">
   
   <h1 class="heading-title">book your trip!</h1>
   <form action="book_form.php" method="post" class="book-form" id="for1">
   
      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" required="required" name="name" value="<?php echo $n?>">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" required="required" name="email" value="<?php echo $e?>">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" required="required" name="phone" value="<?php echo $p?>">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" required="required" name="address" value="<?php echo $a?>">
         </div>
         <div class="inputBox">
            <span>where to :</span><br>
            <input type="text" placeholder="place you want to visit" required="required" name="location" value="<?php echo $pname;?>" readonly>
            <input type="hidden" id="make_text" required="required" name="make_text">
         </div>

         <div class="inputBox">
            <span>how many :</span>
            <input id="b1" type="number" placeholder="number of guests" required="required" name="guests" oninput="fun3();">
         </div>
         <div class="inputBox">
            <span>Price per guest:</span>
            <input type="text" id="a1" placeholder="Price per guest" required="required" name="pprice" value="<?php echo $price;?>" readonly>
         </div>
         <div class="inputBox">
            <span>Total Price :</span>
            <input type="number" placeholder="Total Price" required="required" name="price" id="r1" readonly>
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" required="required" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" required="required" name="leaving">
         </div>
      </div>
      <label for=""><input type="submit" value="submit"class="h1" class="btn" name="send"></label>
      
   </form>
  
</section>


<!-- booking section ends -->

















<!-- footer section starts  -->
<?php
    include 'footer.php'
?>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>