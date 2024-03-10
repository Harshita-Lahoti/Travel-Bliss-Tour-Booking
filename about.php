<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
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
   
<!-- header section starts  -->

<?php
session_start();
include 'header.php'
?>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>about us</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src=" mimg/nature.jpg" alt="">
   </div>

   <div class="content">
      <h3>why choose us?</h3>
      <p>TravelBliss a new travel service fleet from a team of professionals. Travelbliss is a Destination management company, A tour planned and price low so you can See, Enjoy, Explore... Watch how Travebliss designs your holiday and makes it an unforgettable sweet memories and makes your dream in an affordable reality.</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>affordable price</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> clients reviews </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Great management and lovely experience Everything was perfect. Best memory is seeing sunrays falling on Kanchenjunga.</p>
            <h3>jack dev</h3>
            <span>traveler</span>
            <img src="images/pic-1.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Thank you so much for the best holiday!! Everything was organized perfectly from start to finish. The hotel was beautiful and very clean. The cab service was efficient and very friendly. The tours itself was well organised and a great price for everything we did. I would highly recommend and I cannot wait to book another trip.</p>
                <h3>jonh deo</h3>
            <span>traveler</span>
            <img src="images/pic-2.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>I have booked myself for Meghalaya trip with you from 11th to 16th October, I would really like to appreciate the service provided by you (Nikitha Chauhan) from Reify was best. Ms. Nikitha helped us from day 1 to confirmation of our trip with all details and answered all out queries with patience and helped us to make our journey a excellent one. Keep up the good work. And kudos to Nikitha for her support.</p>
               <h3>jack dev</h3>
            <span>traveler</span>
            <img src="images/pic-3.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>It was a great and hassle free experience</p>
            <h3>john deo</h3>
            <span>traveler</span>
            <img src="images/pic-4.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Great management and lovely experience Everything was perfect. Best memory is seeing sunrays falling on Kanchenjunga.</p> 
            <h3>Lead defy</h3>
            <span>traveler</span>
            <img src="images/pic-5.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Hotel was nice, but please improve the camp suggestions. Full on fun with my buddies with less headache of package and other thing</p>  <h3>Dawd deo</h3>
            <span>traveler</span>
            <img src="images/pic-6.png" alt="">
         </div>

      </div>

   </div>

</section>

<!-- reviews section ends -->

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