<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="css/bootstrap.css">
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>


<section class="header">

   <a href="home.php" class="logo">Travel Bliss</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="inquiry.php">inquiry</a>
      <?php 
   
      
      if(isset($_SESSION['sess_name'])){
         $n= $_SESSION['sess_name'];
         
      ?>
      <a href="mybook.php">My Booking</a>
      <a href="logout.php" >Logout</a>
      <button style="border:none;height:7rem;width:7rem;background-color:transparent;" > <img src="dp.png" height="50" width="50" style="border:none;border-radius:50%;display:block;margin-left:auto;margin-right:auto;" ><?php echo $n ?><br></button>
      <?php }?>
      <?php 
         if(!isset($_SESSION['sess_name'])){
      ?>
      <a href="form.php">Register</a>
      <?php }?>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>
</body>
</html>
