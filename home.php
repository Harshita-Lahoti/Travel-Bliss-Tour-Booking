<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
    <style>
      a:hover{
         color:white;
      }
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
   
<!-- header section starts  -->

<?php
session_start();
include 'header.php'
?>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(mimg/woman-g8c451b9eb_640.jpg) no-repeat ">
            <div class="content">
               <span style="color: darkgoldenrod;">explore, discover, travel</span>
               <h3 >travel arround the world</h3>
               <a href="package.php" class="h1" >discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(mimg/sunrise.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="package.php"  class="h1">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="package.php" class="h1">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next" style="right:0px;height:60rem ;background-color: transparent;"></div>
      <div class="swiper-button-prev" style="left:0px;height:60rem ;background-color: transparent;"></div>

   </div>

   
</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="mimg/nature.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>TravelBliss a new travel service fleet from a team of professionals.Travebliss designs your holiday and makes it an unforgettable sweet memories amd makes your dream in an affordable reality.</p>
      <a href="about.php" class="h1">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages galary</h1>

   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="upload/img1.jpg" alt="">
         </div>
</div>
      <div class="box">
         <div class="image">
            <img src="upload/img5.jpg" alt="">
         </div>
</div>
      <div class="box">
         <div class="image">
            <img src="upload/img6.jpg" alt="">
         </div>
</div>
</div>

</div>
   <div class="load-more"> <a href="package.php"  class="h1">load more</a> </div>

</section>

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