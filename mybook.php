<?php
session_start();
if(!isset($_SESSION['sess_name'])){
   
    header("location:form.php?direct_access");
 }

 $n=$_SESSION['sess_name'];
$e=$_SESSION['sess_id'];
$p=$_SESSION['sess_phone'];
$a=$_SESSION['sess_address'];
 $_connect=mysqli_connect("localhost","root","","book_db");
 $query="select * from book_form where email='$e'";
 $result=mysqli_query($_connect,$query);
 
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
    .f{
        font-size:2rem;
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

<div class="heading" style="background:url(mimg/nature.jpg) no-repeat">
   <h1>MY BOOKED PACKAGE LIST</h1>
</div>

    <p></p>
    <div class="container-fluid">
<div class="row">
<table class="table table-bordered table-striped">
    <tr class="f">
        <th>#</th>
        <th>Location</th>
        <th>Arrival</th>
        <th>Leaving</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
   <?php
   $i=1;
   while($key=mysqli_fetch_assoc($result)){
   ?>
   <tr class="f">
   <td><?php echo $i++ ?></td>
    <td><?php echo $key['location'];?></td>
    <td><?php echo $key['arrivals'];?></td>
    <td><?php echo $key['leaving'];?></td>
    <td class="text-center">
        <?php if($key['status'] == 0): ?>
            <span class="">Pending</span>
        <?php elseif($key['status'] == 1): ?>
            <span class="">Confirmed</span>
        <?php elseif($key['status'] == 2): ?>
            <span class="">Cancelled</span>
        <?php elseif($key['status'] == 3): ?>
            <span class="">Done</span>
        <?php endif; ?>
    </td>
    <td><a href="deletebook.php?q=<?php echo $key['id'];?>" onclick="return confirm('Are you sure? you want to cancel booking?')"; class="btn btn-danger">Cancel</a> </td>
   </tr>

   <?php } ?>

</table>
</div>
    </div>
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