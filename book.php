<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Agency</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>
   <script>
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
   loop:true,
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
});

var swiper = new Swiper(".reviews-slider", {
   grabCursor:true,
   loop:true,
   autoHeight:true,
   spaceBetween: 20,
   breakpoints: {
      0: {
        slidesPerView: 1,
      },
      700: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
   },
});

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.packages .box-container .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   };
   currentItem += 3;
   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
}
</script>


<?php include("style.php"); ?>

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="design.php" class="logo"><img src="images/logo.svg"></a>

   <nav class="navbar">
      <a href="design.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php" class="active">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
      <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
      <?php
      unset($_SESSION['success_message']);
   }
   ?>

   <form action="booking.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>
</section>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<!-- booking section ends -->
<!-- footer section starts  -->
<section class="footer" style="background-color: powderblue;">
   <div class="box-container">
      <div class="box">
         <h3 style="color: red;">quick links</h3>
         <a href="design.php" style="color: black;"> <i class="fas fa-angle-right" ></i> home</a>
         <a href="about.php" style="color: black;"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php" style="color: black;"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php" style="color: black;"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3 style="color: red;">extra links</h3>
         <a href="#" style="color: black;"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#" style="color: black;"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#" style="color: black;"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#" style="color: black;"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3 style="color: red;">contact info</h3>
         <a href="#" style="color: black;"> <i class="fas fa-phone"></i> +91 7043993445</a>
         <a href="#" style="color: black;"> <i class="fas fa-phone"></i> +91 5684508647</a>
         <a href="#" style="color: black;"> <i class="fas fa-envelope"></i> JOY@gmail.com </a>
         <a href="#" style="color: black;"> <i class="fas fa-map"></i> Gujarat,INDIA </a>
      </div>
      <div class="box">
         <h3 style="color: red;">follow us</h3>
         <a href="#" style="color: black;"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#" style="color: black;"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#" style="color: black;"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#" style="color: black;"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
   <div class="credit" style="color: black;"> designed by <span>JOY PATEL</span>  -----  All rights reserved! ----- </div>
</section>
<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>