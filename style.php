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

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --main-color:#247ba0;
   --black:#222;
   --white:#fff;
   --tomato:#fd5e42;
   --light-black:#777;
   --light-white:#fff9;
   --dark-bg:rgba(0,0,0,.7);
   --light-bg:#eee;
   --border:.1rem solid var(--main-color);
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
   --text-shadow:0 1.5rem 3rem rgba(0,0,0,.3);
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   text-transform: capitalize;
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
}

html::-webkit-scrollbar{
   width: 1rem;
}

html::-webkit-scrollbar-track{
   background-color: var(--white);
}

html::-webkit-scrollbar-thumb{
   background-color: var(--main-color);
}

section{
   padding:5rem 10%;
}

@keyframes fadeIn {
   0%{
      transform: scale(0);
      opacity: 0;
   }
}

.heading{
   background-size: cover !important;
   background-position: center !important;
   padding-top: 10rem;
   padding-bottom:15rem;
   display: flex;
   align-items: center;
   justify-content: center;
}

.heading h1{
   font-size: 10rem;
   text-transform: uppercase;
   color:var(--white);
   text-shadow: var(--text-shadow);
}

.btn{
   display: inline-block;
   background: var(--tomato);
   margin-top: 1rem;
   color:var(--white);
   font-size: 1.7rem;
   padding:1rem 3rem;
   cursor: pointer;
}

.btn:hover{
   background: var(--main-color);
}

.heading-title{
   text-align: center;
   margin-bottom: 3rem;
   font-size: 6rem;
   text-transform: uppercase;
   color:var(--black);
}

.header{
   position: sticky;
   top:0; left:0; right:0;
   z-index: 1000;
   background-color:yellowgreen;
   display: flex;
   padding-top: 0rem;
   padding-bottom: 0rem;
   box-shadow: var(--box-shadow);
   align-items: center;
   justify-content: space-between;
}

.header .logo{
   font-size: 2.5rem;
   color:black;
}

.header .navbar a{
   font-size: 2rem;
   margin-left: 2rem;
   color:#247ba0;
   text-transform: uppercase;
}

.header .navbar a:hover{
   color:var(--blue);
}

#menu-btn{
   font-size: 2.5rem;
   cursor: pointer;
   color:var(--black);
   display: none;
}

.home{
   padding:0;
}

.home .slide{
   text-align: center;
   padding:2rem;
   display: flex;
   align-items: center;
   justify-content: center;
   background-size: cover !important;
   background-position: center !important;
   min-height: 60rem;
}

.home .slide .content{
   width: 85rem;
   display: none;
}

.home .swiper-slide-active .content{
   display: inline-block;
}

.home .slide .content span{
   display: block;
   font-size: 2.2rem;
   padding-bottom: 1rem;
   animation:fadeIn .2s linear backwards .2s;
}

.home .slide .content h3{
   font-size: 5vw;
   color:var(--white);
   text-transform: uppercase;
   line-height: 1;
   text-shadow: var(--text-shadow);
   padding:1rem 0;
   animation:fadeIn .2s linear backwards .4s;
}

.home .slide .content .btn{
   animation:fadeIn .2s linear backwards .6s;
}

.home .swiper-button-next,
.home .swiper-button-prev{
   height: 5rem;
   width: 5rem;
   background: var(--tomato);
   color:var(--white);
}

.home .swiper-button-next:hover,
.home .swiper-button-prev:hover{
   background: var(--main-color);
   color:var(--white);
}

.home .swiper-button-next::after,
.home .swiper-button-prev::after{
   font-size: 2rem;
}

.home .swiper-button-prev{
   right: 7rem;
}

.services .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(16rem, 1fr));
   gap: 1.5rem;
}
.partner .box-container {
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(25rem, 2fr));
   gap: 3rem;
}

.services .box-container .box{
   padding:3rem 2rem;
   text-align: center;
   background: var(--main-color);
   cursor: pointer;
}

.services .box-container .box:hover{
   background: var(--tomato);
}

.services .box-container .box img{
   height: 7rem;
}

.services .box-container .box h3{
   color:var(--white);
   font-size: 1.7rem;
   padding-top: 1rem;
}

.home-about{
   display: flex;
   align-items: center;
   flex-wrap: wrap;
}

.home-about .image{
   flex:1 1 41rem;
}

.home-about .image img{
   width: 100%;
}

.home-about .content{
   flex:1 1 41rem;
   padding:3rem;
   background: var(--light-bg);
}

.home-about .content h3{
   font-size: 3rem;
   color:var(--black);
}

.home-about .content p{
   font-size: 1.5rem;
   padding:1rem 0;
   line-height: 2;
   color:var(--black);
   text-align: justify;
}

.home-packages{
   background: var(--light-bg);
}

.home-packages .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap: 2rem;
}

.home-packages .box-container .box{
 /*  border:var(--border);*/
   box-shadow: var(--box-shadow);
   background: var(--white);
}

.home-packages .box-container .box:hover .image img{
   transform: scale(1.1);
}

.home-packages .box-container .box .image{
   height: 25rem;
   overflow: hidden;
}

.home-packages .box-container .box .image img{
   height: 100%;
   width: 100%;
   object-fit: cover;
   transition: .2s linear;
}

.home-packages .box-container .box .content{
   padding:2rem;
   text-align: center;
}

.home-packages .box-container .box .content h3{
   font-size: 2.5rem;
   color:var(--black);
}

.home-packages .box-container .box .content p{
   font-size: 1.5rem;
   color:var(--light-black);
   line-height: 2;
   padding:1rem 0;
}

.home-packages .load-more{
   text-align: center;
   margin-top: 2rem;
}

.home-offer {
   text-align: center;
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(40rem, 1fr));
   gap: 3rem;
}

.home-offer .content{
   max-width:70rem;
   margin:0 auto;
}

.home-offer .content h3{
   font-size: 3.5rem;
   text-transform: uppercase;
   color:var(--black);
}

.home-offer .content p{
   font-size: 1.5rem;
   color:var(--light-black);
   line-height: 2;
   padding:1rem 0;
   text-align: justify;
}
.offerimage img{
   width: 100%;
}

.about{
   display: flex;
   align-items: center;
   flex-wrap: wrap;
   gap:3rem;
}

.about .image{
   flex:1 1 41rem;
}

.about .image img{
   width: 100%;
}

.about .content{
   flex:1 1 41rem;
   text-align: center;
}

.about .content h3{
   font-size: 3rem;
   color:var(--black);
}

.about .content p{
   font-size: 1.5rem;
   color:var(--light-black);
   line-height: 2;
   padding:1rem 0;
   text-align: justify;
}

.about .content .icons-container{
   margin-top: 2rem;
   display: flex;
   flex-wrap: wrap;
   gap:1.5rem;
   align-items: flex-end;
}

.about .content .icons-container .icons{
   background: var(--light-bg);
   padding:2rem;
   flex:1 1 16rem;
}

.about .content .icons-container .icons i{
   font-size: 4rem;
   margin-bottom: 2rem;
   color:var(--main-color);
}

.about .content .icons-container .icons span{
   font-size: 1.5rem;
   color:var(--light-black);
   display:block;
}

.reviews{
   background: var(--light-bg);
}

.reviews .slide{
   padding:2rem;
   border:var(--border);
   background: var(--white);
   text-align: center;
   box-shadow: var(--box-shadow);
   user-select: none;
}

.reviews .slide .stars{
   padding-bottom: .5rem;
}

.reviews .slide .stars i{
   font-size: 1.7rem;
   color:var(--main-color);
}

.reviews .slide p{
   font-size: 1.5rem;
   color:var(--light-black);
   line-height: 2;
   padding:1rem 0;
   text-align: justify;
}

.reviews .slide h3{
   font-size: 2rem;
   color:var(--black);
}

.reviews .slide span{
   font-size: 1.5rem;
   color:var(--main-color);
   display: block;
}

.reviews .slide img{
   height: 7rem;
   width: 7rem;
   border-radius: 50%;
   margin-top: 1rem;
}

.packages .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(37rem, 1fr));
   gap: 2rem;
}

.packages .box-container .box{
   border:var(--border);
   box-shadow: var(--box-shadow);
   background: var(--white);
   display: none;
}

.packages .box-container .box:nth-child(1),
.packages .box-container .box:nth-child(2),
.packages .box-container .box:nth-child(3),
.packages .box-container .box:nth-child(4),
.packages .box-container .box:nth-child(5),
.packages .box-container .box:nth-child(6){
   display: inline-block;
}

.packages .box-container .box:hover .image img{
   transform: scale(1.1);
}

.packages .box-container .box .image{
   height: 25rem;
   overflow: hidden;
}

.packages .box-container .box .image img{
   height: 100%;
   width: 100%;
   object-fit: cover;
   transition: .2s linear;
}

.packages .box-container .box .content{
   padding:2rem;
   text-align: center;
}

.packages .box-container .box .content h3{
   font-size: 2.5rem;
   color:var(--black);
}

.packages .box-container .box .content p{
   font-size: 1.5rem;
   color:var(--light-black);
   line-height: 2;
   padding:1rem 0;
}

.packages .load-more{
   text-align: center;
   margin-top: 2rem;
}

.booking .book-form{
   padding:2rem;
   background: var(--light-bg);
}

.booking .book-form .flex{
   display: flex;
   flex-wrap: wrap;
   gap:2rem;
}

.booking .book-form .flex .inputBox{
   flex:1 1 41rem;
}

.booking .book-form .flex .inputBox input{
   width: 100%;
   padding:1.2rem 1.4rem;
   font-size: 1.6rem;
   color:var(--light-black);
   text-transform: none;
   margin-top: 1.5rem;
   border:var(--border);
}

.booking .book-form .flex .inputBox input:focus{
   background: var(--black);
   color:var(--white);
}

.booking .book-form .flex .inputBox input:focus::placeholder{
   color:var(--light-white);
}

.booking .book-form .flex .inputBox span{
   font-size: 1.5rem;
   color:var(--light-black);
}

.booking .book-form .btn{
   margin-top: 2rem;
}
.content h2 {
   font-size: 25px;
   font-weight: normal;
   color: #247ba0;
}
.partner{
   text-align: center;
   cursor: pointer;
   padding: 10px 30px;
}
.scroll-top{
        position: fixed;
        bottom: 10px;
        right: 10px;
        z-index: 99;
        background: var(--tomato);
        color: #fff;
        border-radius: 50px;
        padding: 15px;
        font-weight: bold;
        line-height: normal;
        border: none;
        width: 50px;
        height: 50px;
        cursor: pointer;
    }
.footer{
   background: url(../images/footer-bg.jpg) no-repeat;
   background-size: cover;
   background-position: center;
}

.footer .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
   gap: 3rem;
}

.footer .box-container .box h3{
   color:var(--white);
   font-size: 2.5rem;
   padding-bottom: 2rem;
}

.footer .box-container .box a{
   color:var(--white);
   font-size: 1.5rem;
   padding-bottom: 1.5rem;
   display: block;
}

.footer .box-container .box a i{
   color:var(--tomato);
   padding-right: .5rem;
   transition: .2s linear;
}

.footer .box-container .box a:hover i{
   padding-right: 2rem;
}

.footer .credit{
   text-align: center;
   padding-top: 3rem;
   margin-top: 3rem;
   border-top: .1rem solid var(--light-white);
   font-size: 2rem;
   color:var(--white);
}

.footer .credit span{
   color:var(--tomato);
}
.active{
   color: var(--tomato)!important;
}


/* media queries  */

@media (max-width:1200px){

   section{
      padding:3rem 5%;
   }

}

@media (max-width:991px){

   html{
      font-size: 55%;
   }

   section{
      padding:3rem 2rem;
   }

   .home .slide .content h3{
      font-size: 10vw;
   }

}

@media (max-width:768px){

   .heading h1{
      font-size: 4rem;
   }

   #menu-btn{
      display: inline-block;
      transition: .2s linear;
   }

   #menu-btn.fa-times{
      transform: rotate(180deg);
   }

   .header .navbar{
      position: absolute;
      top:99%; left:0; right:0;
      background-color: var(transparent);
      border-top: var(--border);
      padding:2rem;
      transition: .2s linear;
      clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
   }

   .header .navbar.active{
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
   }

   .header .navbar a{
      display: block;
      margin:2rem;
      text-align: center;
   }

}

@media (max-width:450px){

   html{
      font-size: 50%;
   }

   .heading-title{
      font-size: 3.5rem;
   }
   .logo img {
      width: 70%;
   }

}
</style>