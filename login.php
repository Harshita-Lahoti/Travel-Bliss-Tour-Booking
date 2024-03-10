<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
    
     <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">
<style>

    .h1{
        display: inline-block;
        background: var(--black);
        margin-top: 1rem;
        color: var(--white);
        font-size: 1.7rem;
        padding: 1rem 3rem;
        cursor: pointer;
        text-decoration:none;
    }
    .btn{
        display: inline-block;
        background: var(--black);
        margin-top: 1rem;
        color:var(--white);
        font-size: 1.7rem;
        padding:1rem 3rem;
        cursor: pointer;
    }

    .btn:hover{
        background: var(--main-color);
    }
    </style>
</head>

<body>
<?php
include 'header.php'
?>
<?php
	if(isset($_REQUEST['try_again'])){
	?>
		<script>
			window.alert("Invalid ID & password");
		</script>
	<?php
	}
	if(isset($_REQUEST['direct_access'])){
        ?>
		<script>
			window.alert("unauthorised access");
		</script>
	<?php
	}
	if(isset($_REQUEST['logout_successfully'])){
        ?>
		<script>
			window.alert("logout successfully");
		</script>
	<?php
	}
	if(isset($_REQUEST['login_successfully'])){
        ?>
		<script>
			window.alert("login successfully");
		</script>
	<?php
	}
	?>
    
<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Sign In</h1>
</div>

    <section class="booking">

   <form onsubmit="return validation()" action="connect.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Email Id:</span>
            <input type="text" placeholder="enter your email id"  required="required" name="email">
         </div>
         <div class="inputBox">
            <span>Password:</span>
            <input type="password" placeholder="enter your password" required="required"  name="pass">
         </div>
</div>
      <input type="submit" class="h1" value="Login">

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