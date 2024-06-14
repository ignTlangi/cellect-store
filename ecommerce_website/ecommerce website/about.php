<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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

<!-- about section starts  -->

<section class="about">

    <div class="image">
        <img src="images/aboutimg.png" alt=" ">
    </div>

    <div class="content">
        <h3>our story</h3>
        <p>I cant lie i broke my phone once and watched a youtube video that had google pixels in it and i was like wow coool phone but where do i get them so i made a store to get them myself for 20% under market value which took 6 months to make instead of being a normal person and getting in on takealot</p>
        <p>cellect.co.za</p>
        <a href="#" class="btn">read more</a>
    </div>

</section>

<!-- about section ends -->

<!-- faq section starts  -->

<section class="faq">

    <h1 class="heading"> questions & <span>answers</span> </h1>

    <div class="accordion-container">

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how do you handle refunds</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                send us enough emails we'll probably give you an iphone 6 - contact@cellect.co.za
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to place order online?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                you're literally on the website just press the buy button bro
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to pay online?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                eft
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>is online payment safe?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                totally.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to contact service center?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                contact@cellect.co.za yes this is a real business email please dont spam us
            </p>
        </div>

    </div>

</section>

<!-- faq section ends -->

<!-- review section starts  -->

<section class="review">

    <h1 class="heading"> clients <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="images/pic-1.jpg" alt="">
                <h3>Khilona</h3>
                <span>Singer</span>
                <p>would like totally like buy like stuff from here like its so cool</p>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-2.jpeg" alt="">
                <h3>Tendai</h3>
                <span>Father</span>
                <p>nice website son</p>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-3.jpg" alt="">
                <h3>Ramaposa</h3>
                <span>Mini Instagram Celebrity</span>
                <p>I know some of us come to work every day filled with fear, resignation, and doubt. In the midst of uncertainty, we have survived. These challenging times have tested our character, but we have not backed down. It has tested our perseverance, but we are still here.</p>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-4.png" alt="">
                <h3>john deo</h3>
                <span>designer</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit explicabo placeat laborum pariatur voluptatibus tenetur impedit assumenda ex reprehenderit soluta ea fugiat error in laboriosam cum dicta consequuntur, sapiente minima quis hic deserunt magnam dignissimos.</p>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-5.png" alt="">
                <h3>john deo</h3>
                <span>designer</span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt explicabo laborum eos delectus, in pariatur iste! Ducimus laudantium nostrum odio.</p>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-6.png" alt="">
                <h3>john deo</h3>
                <span>designer</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus earum quas quo natus quis, accusamus maxime magni molestias eos. Ab nihil magnam, id inventore explicabo ducimus repudiandae unde distinctio iste!</p>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->













<!-- footer section starts  -->

<?php include 'footer.php'; ?>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js" defer></script>

</body>
</html>