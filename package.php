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



   <?php include("style.php"); ?>

</head>
<body>
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
   
<!-- header section starts  -->

<section class="header">

   <a href="design.php" class="logo"><img src="images/logo.svg"></a>

   <nav class="navbar">
      <a href="design.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php" class="active">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dubai Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Dubai top selling packages!</p>
            <h2>BDT 10,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Delhi Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Delhi top selling packages!</p>
            <h2>BDT 9,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Japan Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Japan top selling packages!</p>
            <h2>BDT 11,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-4.jpg" alt="">
         </div>
         <div class="content">
            <h3>Australia Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Australia top selling packages!</p>
            <h2>BDT 13,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-5.jpg" alt="">
         </div>
         <div class="content">
            <h3>china Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our china top selling packages!</p>
            <h2>BDT 7,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-6.jpg" alt="">
         </div>
         <div class="content">
            <h3>singapur Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our singapur top selling packages!</p>
            <h2>BDT 12,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-7.jpg" alt="">
         </div>
         <div class="content">
            <h3>spain Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our spain top selling packages!</p>
            <h2>BDT 18,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-8.jpg" alt="">
         </div>
         <div class="content">
            <h3>canada Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our canada top selling packages!</p>
            <h2>BDT 21,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-9.jpg" alt="">
         </div>
         <div class="content">
            <h3>barli Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our barli top selling packages!</p>
            <h2>BDT 14,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-10.jpg" alt="">
         </div>
         <div class="content">
            <h3>nepal Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our nepal top selling packages!</p>
            <h2>BDT 7,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-11.jpg" alt="">
         </div>
         <div class="content">
            <h3>bangladesh Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our bangladesh top selling packages!</p>
            <h2>BDT 5,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-12.jpg" alt="">
         </div>
         <div class="content">
            <h3>Japan Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Japan top selling packages!</p>
            <h2>BDT 11,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"><span class="btn">see more</span></div>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

</section>

<!-- packages section ends -->
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