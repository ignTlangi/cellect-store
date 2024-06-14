<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>

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

<!-- shopping cart section starts  -->

<section class="shopping-cart">

    <h1 class="heading">your <span>products</span></h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/product-1.jpg" alt="">
            <div class="content">
                <h3>smartphone</h3>
                <form action="">
                    <span>quantity : </span>
                    <input type="number" name="" value="1" id="">
                </form>
                <div class="price">R249.99 <span>R399.99</span></div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/product-2.jpg" alt="">
            <div class="content">
                <h3>camera</h3>
                <form action="">
                    <span>quantity : </span>
                    <input type="number" name="" value="1" id="">
                </form>
                <div class="price">R249.99 <span>R399.99</span></div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/product-3.jpg" alt="">
            <div class="content">
                <h3>television</h3>
                <form action="">
                    <span>quantity : </span>
                    <input type="number" name="" value="1" id="">
                </form>
                <div class="price">R249.99 <span>R399.99</span></div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/product-4.jpg" alt="">
            <div class="content">
                <h3>speaker</h3>
                <form action="">
                    <span>quantity : </span>
                    <input type="number" name="" value="1" id="">
                </form>
                <div class="price">R249.99 <span>R399.99</span></div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/product-6.jpg" alt="">
            <div class="content">
                <h3>smartwatch</h3>
                <form action="">
                    <span>quantity : </span>
                    <input type="number" name="" value="1" id="">
                </form>
                <div class="price">R249.99 <span>R399.99</span></div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/product-7.jpg" alt="">
            <div class="content">
                <h3>headphone</h3>
                <form action="">
                    <span>quantity : </span>
                    <input type="number" name="" value="1" id="">
                </form>
                <div class="price">R249.99 <span>R399.99</span></div>
            </div>
        </div>

    </div>

    <div class="cart-total">
        <h3> subtotal : <span>R1499.94</span> </h3>
        <h3> discount : <span>-R99.94</span> </h3>
        <h3> subtotal : <span>R1400.00</span> </h3>
        
        <button class="btn"type="button" onclick="payWithPaystack()"> Pay </button> 
        <script>
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_live_a73afefa8236a09d357e9b8f76427282aedf0c32',
      email: 'igntlangi@gmail.com',
      amount: 10000,
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348012345678"
            }
         ]
      },
      callback: function(response) {
        if (response.status === 'success') {
            alert('Order received! Thank you for your purchase.');

            setTimeout(function() {
                window.location.href = "index.php"; // Redirect to homepage
            }, 2000); // 2-second delay
        } else {
            
            document.getElementById('error-message').textContent = "Payment failed. Please try again.";
        }
    },
      onClose: function(){
          alert('window closed');
      }
    });

    
    handler.openIframe();

    
  }
</script>
    </div>

</section>

<!-- shopping cart section ends -->








<!-- footer section starts  -->

<?php include 'footer.php'; ?>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!--    paystack js -->
<script src="https://js.paystack.co/v1/inline.js"></script>



<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>