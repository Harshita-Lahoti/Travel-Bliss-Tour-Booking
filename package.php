<?php
session_start();
if(!isset($_SESSION['sess_name'])){
   
    header("location:form.php?direct_access");
 }

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>package</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

      <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>


    <style>
      *{
       text-decoration:none;
      }
.c1{
    margin-left: 12px;
}
#i1{
    width: 440px;
    margin-bottom: 12px;
}
#d1{
    margin-right: 12px;
    width: 441px;
}
#i2,#i4{
    margin-top: 21px;
}
#i3{
    margin-top: 21px;
}

.b1{
    width: 113px;
}
#b1{
    background-color: red;
    color: white;
}
#b2{
    background-color: blue;
    color: white;
}
input[type='checkbox']{
    accent-color: rgb(234, 11, 115);
    
}
input.h1{
    width: 27px;
    height: 22px;
}
.l1{
    font-size: 19px;
    margin-left: 9px;
    padding-bottom: 14px;
}
.bagc{
    background-color: blue;
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

.but{
    height: 3rem;
    text-align: center;
    font-size: 2em;
    font-size: 1.7rem;
    padding: 0rem 3rem;
    cursor: pointer;
    width: 15rem;
}
#c1{
    text-align: center;
}
.p1{
    border: 0px;
    padding: 0px;
    margin: 0px;
}
.h6{
    text-align: left;
    margin-left: 80px;
}
.cen{
    display: flex;
    justify-content: center;
    align-items: center;
    
}

a:hover{
    color:white;
}
.img{
    width:33rem;
    height:23rem;
}

    </style>


</head>
<body>
   
<!-- header section starts  -->

<?php
include 'header.php'
?>

<!-- header section ends -->



<!-- packages section start -->

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>


<section class="packages">

<h1 class="heading-title">top destinations</h1>

<div class="box-container">
<?PHP 

$c=mysqli_connect("localhost","root","","book_db");
$q="select * from package order by rand()";
$result=mysqli_query($c,$q);


while ($key=mysqli_fetch_assoc($result)) {
?>
      <div class="box">
         <div class="image">
            <img src="upload/<?php echo $key['pfile']?>" alt="">
         </div>
         <div class="content">
         <h3><?php echo $key['pname']?></h3>
            <p><?php echo $key['pname']?> is one of the best family vacation destinations in India.</p>
            <button type="button" data-bs-toggle="modal" data-bs-target="#m2<?php echo $key['pid'];?>" class="h1">View Details</button>

            <div class="modal" id="m2<?php echo $key['pid'];?>">

               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header bagc" style="background-color:blue;">
                     <h3><?php echo $key['pname']?></h3>
                        <button class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
                  <div class="modal-body">
                     <form action="">
                        <?php $rr=$key['pid'];
                        $c1=mysqli_connect("localhost","root","","book_db");
                        $q1="select * from package where pid='$rr'";
                        $result1=mysqli_query($c1,$q1);
                        while ($key1=mysqli_fetch_assoc($result1)) {
                        ?>
                        <div class="container">
                              <div class="col">
                                  <label for=""><h2><?php echo $key1['pname']?></h2></label>
                                 <div class="row-md-6">
                                    <img class="img" src="upload/<?php echo $key1['pfile']?>" alt="">
                                    <p><?php echo $key1['pname']?> is one of the best family vacation destinations in India.</p>
                                 </div>
                                 <div class="row-md-6">
                                    <p><h4>Price</h4><h3>INR <?php echo $key1['price']?></h3></p>
                                 </div>
                              </div>
                        </div>
                        <?php } ?>
                     </form>
                  </div>
                  <div class="modal-footer">
         <label for=""><a href="book.php?q=<?php echo $key['pid'];?>" class="h1">book now</a></label>
                    

                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
<?php }?>
</div>

</section>

<!-- packages section ends -->

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