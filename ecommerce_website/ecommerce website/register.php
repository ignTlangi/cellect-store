<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<?php include 'header.php'; ?>

<!-- header section ends -->

<!-- side-bar section starts -->

<?php include 'sidebar.php'; ?>

<!-- side-bar section ends -->

<!-- register form section starts  -->

<section class="register">
    <form action="formhandler.inc.php" method="post"> <h3>Register Now</h3>
        <input type="text" name="name" placeholder="Enter your name" class="box" required> <input type="email" name="email" placeholder="Enter your email" class="box" required>
        <input type="password" name="password" placeholder="Enter your password" class="box" required> <input type="submit" name="submit" value="Register Now" class="btn">
        <p>Already have an account?</p>
        <a href="login.php" class="btn link">Login Now</a>
    </form>
</section>


<!-- register form section ends  -->

<!-- footer section starts  -->

<?php include 'footer.php'; ?>

<!-- footer section ends -->

<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>