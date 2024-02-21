<style>
    @keyframes animate {
	0% {
		background-position: 0%;
	}

	100% {
		background-position: 400%;
	}
}
</style>


<design style="z-index:100; display:flex;top: 390px; left: 130px;
position:absolute;color:orange;font-size:5em;font-weight:bold;
margin:auto;
background: linear-gradient(90deg, #ff0000, #ffff00, #ff00f3, #0033ff, #ff00c4, #ff0000);
	background-size: 400%;
	font-size: 100px;
	font-weight: 850;
	word-spacing: 5px;
	-webkit-text-fill-color: transparent;
	-webkit-background-clip: text;
	animation: animate 10s linear infinite;"> 
 
 
 WELCOME TO TOURLY

</design>




<video class="video-slide" src=" images/home.mp4" autoplay muted loop; style="z-index: 000; object-fit: cover; width: 100%;
    height: 630px; top: 0; left: 0; " > </video>







<section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">Journey to explore world</h2>

          <p class="hero-text">
            Ac mi duis mollis. Sapiente? Scelerisque quae, penatibus? Suscipit class corporis nostra rem quos
            voluptatibus habitant?
            Fames, vivamus minim nemo enim, gravida lobortis quasi, eum.
          </p>

          <div class="btn-group">
           <a href="https://learn-more.eu/wp-content/uploads/2020/06/LM_logo_colore.svg" <button class="btn btn-primary">Learn more</button> </a>

            <a href="book.php" <button class="btn btn-secondary">Book now</button> </a>
          </div>

        </div>
      </section>










<style>

:root {

/**
 * colors
 */

--united-nations-blue: hsl(214, 56%, 58%);
--bright-navy-blue: hsl(214, 57%, 51%);
--spanish-gray: hsl(0, 0%, 60%);
--black-coral: hsl(225, 8%, 42%);
--oxford-blue: hsl(208, 97%, 12%);
--yale-blue: hsl(214, 72%, 33%);
--blue-ncs: hsl(197, 100%, 36%);
--gunmetal: hsl(206, 34%, 20%);
--gainsboro: hsl(0, 0%, 88%);
--cultured: hsl(0, 0%, 98%);
--white: hsl(0, 0%, 100%);
--black: hsl(0, 0%, 0%);
--onyx: hsl(0, 0%, 25%);
--jet: hsl(0, 0%, 20%);

/**
 * typography
 */

--ff-poppins: "Poppins", sans-serif;
--ff-montserrat: "Montserrat", sans-serif;

--fs-1: calc(20px + 3.5vw);
--fs-2: calc(18px + 1.6vw);
--fs-3: calc(16px + 0.45vw);
--fs-4: 15px;
--fs-5: 14px;
--fs-6: 13px;
--fs-7: 12px;
--fs-8: 11px;

--fw-500: 500;
--fw-600: 600;
--fw-700: 700;
--fw-800: 800;

/**
 * transition
 */

--transition: 0.25s ease-in-out;

/**
 * spacing
 */

--section-padding: 60px;

/**
 * border-radius
 */

--radius-15: 15px;
--radius-25: 25px;

}





/*-----------------------------------*\
* #RESET
\*-----------------------------------*/

*, *::before, *::after {
margin: 0;
padding: 0;
box-sizing: border-box;
}

li { list-style: none; }

a { text-decoration: none; }

a,
img,
span,
input,
label,
button,
ion-icon { display: block; }

input,
button {
background: none;
border: none;
font: inherit;
}

button { cursor: pointer; }

input { width: 100%; }

ion-icon { pointer-events: none; }

html {
font-family: var(--ff-poppins);
scroll-behavior: smooth;
}

body { background: var(--white); }





/*-----------------------------------*\
* #REUSED STYLE
\*-----------------------------------*/

.container { padding-inline: 15px; }

.btn {
color: var(--white);
text-transform: uppercase;
font-size: var(--fs-5);
border-radius: 100px;
padding: var(--padding, 8px 18px);
border: var(--border-width, 2px) solid transparent;
transition: var(--transition);
}

.btn-primary {
background: var(--bright-navy-blue);
border-color: var(--bright-navy-blue);
}

.btn-primary:is(:hover, :focus) {
background: var(--yale-blue);
border-color: var(--yale-blue);
}

.btn-secondary { border-color: var(--white); }

.btn-secondary:is(:hover, :focus) { background: hsla(0, 0%, 100%, 0.1); }

.h1,
.h2,
.h3 {
font-weight: var(--fw-800);
font-family: var(--ff-montserrat);
text-transform: uppercase;
}

.h1 {
color: var(--white);
font-size: var(--fs-1);
}

.h2,
.h3 { color: var(--gunmetal); }

.h2 { font-size: var(--fs-2); }

.h3 {
font-size: var(--fs-3);
font-weight: var(--fw-700);
}

.section-subtitle {
color: var(--bright-navy-blue);
font-size: var(--fs-5);
text-transform: uppercase;
font-family: var(--ff-montserrat);
margin-bottom: 8px;
}

.section-title { margin-bottom: 15px; }

.section-text {
color: var(--black-coral);
margin-bottom: 30px;
}

.card-text {
color: var(--black-coral);
font-size: var(--fs-5);
}





/*-----------------------------------*\
* #HEADER
\*-----------------------------------*/

.header {
position: absolute;
top: 0;
left: 0;
width: 100%;
padding-top: 61px;
z-index: 4;
}

.header-top {
position: absolute;
top: 0;
left: 0;
width: 100%;
transition: var(--transition);
border-bottom: 1px solid hsla(0, 0%, 100%, 0.1);
padding-block: 15px;
z-index: 1;
}

.header.active .header-top {
position: fixed;
background: var(--gunmetal);
}

.header-top .container {
display: grid;
grid-template-columns: repeat(3, 1fr);
justify-items: flex-start;
align-items: center;
}

.helpline-box .wrapper { display: none; }

.helpline-box .icon-box {
background: var(--bright-navy-blue);
padding: 6px;
border-radius: 50%;
color: var(--white);
}

.helpline-box .icon-box ion-icon { --ionicon-stroke-width: 40px; }

.header-top .logo { margin-inline: auto; }

.header-top .logo img { max-width: 100px; }

.header-btn-group {
justify-self: flex-end;
display: flex;
align-items: center;
gap: 10px;
color: var(--white);
}

.search-btn,
.nav-open-btn {
font-size: 30px;
color: inherit;
}

.search-btn { font-size: 20px; }

.header-bottom { border-bottom: 1px solid hsla(0, 0%, 100%, 0.1); }

.header-bottom .container {
display: flex;
justify-content: space-between;
align-items: center;
padding-block: 15px;
}

.social-list {
display: flex;
align-items: center;
gap: 5px;
}

.social-link {
color: var(--white);
padding: 8px;
border: 1px solid hsla(0, 0%, 100%, 0.3);
border-radius: 50%;
font-size: 15px;
transition: var(--transition);
}

.social-link:is(:hover, :focus) { background: hsla(0, 0%, 100%, 0.2); }

.header .btn { --padding: 4px 20px; }

.header .navbar {
position: fixed;
top: 0;
right: -300px;
width: 100%;
max-width: 300px;
height: 100%;
background: var(--white);
visibility: hidden;
pointer-events: none;
transition: 0.15s ease-in;
z-index: 3;
}

.navbar.active {
right: 0;
visibility: visible;
pointer-events: all;
transition: 0.25s ease-out;
}

.navbar-top {
display: flex;
justify-content: space-between;
align-items: center;
padding: 40px 15px;
}

.navbar-top .logo img { width: 150px; }

.nav-close-btn {
font-size: 20px;
color: var(--bright-navy-blue);
}

.nav-close-btn ion-icon { --ionicon-stroke-width: 80px; }

.navbar-list { border-top: 1px solid hsla(0, 0%, 0%, 0.1); }

.navbar-list li { border-bottom: 1px solid hsla(0, 0%, 0%, 0.1); }

.navbar-link {
padding: 15px 20px;
color: var(--jet);
font-weight: var(--fw-500);
font-size: var(--fs-4);
transition: var(--transition);
text-transform: capitalize;
}

.navbar-link:is(:hover, :focus) { color: var(--bright-navy-blue); }

.overlay {
position: fixed;
inset: 0;
background: var(--black);
opacity: 0;
pointer-events: none;
z-index: 2;
transition: var(--transition);
}

.overlay.active {
opacity: 0.7;
pointer-events: all;
}





/*-----------------------------------*\
* #HERO
\*-----------------------------------*/

.hero {
  background-image: url('<?php echo validate_image($_settings->info('cover')) ?>') !important;
background-repeat: no-repeat;
background-size: cover;
background-position: center;
background-color: hsla(0, 0%, 0%, 0.7);
background-blend-mode: overlay;
display: grid;
place-items: center;
min-height: 600px;
text-align: center;
padding-top: 125px;
}

.hero-title { margin-bottom: 20px; }

.hero-text {
color: var(--white);
font-size: var(--fs-5);
margin-bottom: 40px;
}

.btn-group {
display: flex;
flex-wrap: wrap;
justify-content: center;
align-items: center;
gap: 10px;
}





/*-----------------------------------*\
* #TOUR SEARCH
\*-----------------------------------*/

.tour-search {
background: var(--bright-navy-blue);
padding-block: var(--section-padding);
}

.tour-search-form .input-label {
color: var(--white);
font-size: var(--fs-4);
margin-left: 20px;
margin-bottom: 10px;
}

.tour-search-form .input-field {
background: var(--white);
padding: 10px 15px;
font-size: var(--fs-5);
border-radius: 50px;
}

.tour-search-form .input-field::placeholder { color: var(--spanish-gray); }

.tour-search-form .input-field::-webkit-datetime-edit {
color: var(--spanish-gray);
text-transform: uppercase;
}

.tour-search-form .input-wrapper { margin-bottom: 15px; }

.tour-search .btn {
width: 100%;
--border-width: 1px;
font-weight: var(--fw-600);
margin-top: 35px;
}





/*-----------------------------------*\
* #POPULAR
\*-----------------------------------*/

.popular { padding-block: var(--section-padding); }

.popular-list,
.popular-list > li:not(:last-child) { margin-bottom: 30px; }

.popular-card {
position: relative;
overflow: hidden;
border-radius: var(--radius-25);
height: 430px;
}

.popular-card .card-img { height: 100%; }

.popular-card .card-img img {
width: 100%;
height: 100%;
object-fit: cover;
}

.popular-card .card-content {
position: absolute;
bottom: 20px;
left: 20px;
right: 20px;
background: var(--white);
border-radius: var(--radius-25);
padding: 20px;
}


.popular-card .card-rating {
background: var(--bright-navy-blue);
color: var(--white);
position: absolute;
top: 0;
right: 25px;
display: flex;
align-items: center;
gap: 1px;
transform: translateY(-50%);
padding: 6px 10px;
border-radius: 20px;
font-size: 14px;
}

.popular-card .card-subtitle {
color: var(--blue-ncs);
font-size: var(--fs-6);
text-transform: uppercase;
margin-bottom: 8px;
}

.popular-card .card-title { margin-bottom: 5px; }

.popular-card :is(.card-subtitle, .card-title) > a { color: inherit; }

.popular .btn { margin-inline: auto; }





/*-----------------------------------*\
* #PACKAGE
\*-----------------------------------*/

.package { padding-block: var(--section-padding); }

.package-list { margin-bottom: 40px; }

.package-list > li:not(:last-child) { margin-bottom: 30px; }

.package-card {
background: var(--cultured);
overflow: hidden;
border-radius: 15px;
}

.package-card .card-banner { height: 250px; }

.package-card .card-banner img {
width: 100%;
height: 100%;
object-fit: cover;
}

.package-card .card-content { padding: 30px 20px; }

.package-card .card-title { margin-bottom: 15px; }

.package-card .card-text {
line-height: 1.6;
margin-bottom: 20px;
}

.card-meta-list {
background: var(--white);
max-width: max-content;
display: flex;
flex-wrap: wrap;
justify-content: center;
align-items: center;
padding: 8px;
box-shadow: 0 0 5px hsla(0, 0%, 0%, 0.15);
border-radius: 50px;
}

.card-meta-item { position: relative; }

.card-meta-item:not(:last-child)::after {
content: "";
position: absolute;
top: 4px;
right: -1px;
bottom: 4px;
width: 1px;
background: hsla(0, 0%, 0%, 0.3);
}

.meta-box {
display: flex;
justify-content: center;
align-items: center;
gap: 5px;
padding-inline: 9px;
color: var(--black-coral);
font-size: var(--fs-8);
}

.meta-box > ion-icon {
color: var(--bright-navy-blue);
font-size: 13px;
}

.package-card .card-price {
background: var(--united-nations-blue);
color: var(--white);
padding: 25px 20px;
text-align: center;
}

.package-card .card-price .wrapper {
display: flex;
flex-wrap: wrap;
justify-content: center;
align-items: center;
gap: 5px 15px;
margin-bottom: 10px;
}

.package-card .card-price .reviews { font-size: var(--fs-5); }

.package-card .card-rating {
display: flex;
justify-content: center;
align-items: center;
gap: 1px;
font-size: 14px;
}

.package-card .card-rating ion-icon:last-child { color: hsl(0, 0%, 80%); }

.package-card .price {
font-size: var(--fs-2);
font-family: var(--ff-montserrat);
font-weight: var(--fw-800);
margin-bottom: 20px;
}

.package-card .price span {
font-size: var(--fs-7);
font-weight: initial;
}

.package .btn { margin-inline: auto; }





/*-----------------------------------*\
* #GALLERY
\*-----------------------------------*/

.gallery { padding-block: var(--section-padding); }

.gallery-list {
display: grid;
grid-template-columns: 1fr 1fr;
gap: 10px;
}

.gallery-image {
width: 100%;
height: 100%;
border-radius: var(--radius-15);
overflow: hidden;
}

.gallery-item:nth-child(3) { grid-area: 1 / 2 / 3 / 3; }

.gallery-image img {
width: 100%;
height: 100%;
object-fit: cover;
}





/*-----------------------------------*\
* #CTA
\*-----------------------------------*/

.cta {
background: var(--bright-navy-blue);
padding-block: var(--section-padding);
}

.cta :is(.section-subtitle, .section-title, .section-text) { color: var(--white); }

.cta .section-text { font-size: var(--fs-5); }





/*-----------------------------------*\
* #FOOTER
\*-----------------------------------*/

.footer-top {
background: var(--gunmetal);
padding-block: var(--section-padding);
color: var(--gainsboro);
}

.footer-brand { margin-bottom: 30px; }

.footer-brand img { width: 180px; }

.footer-brand .logo { margin-bottom: 20px; }

.footer-text {
font-size: var(--fs-5);
line-height: 1.7;
}

.footer-contact { margin-bottom: 30px; }

.contact-title {
position: relative;
font-family: var(--ff-montserrat);
font-weight: var(--fw-500);
margin-bottom: 30px;
}

.contact-title::after {
content: "";
position: absolute;
bottom: -10px;
left: 0;
width: 50px;
height: 2px;
background: var(--bright-navy-blue);
}

.contact-text {
font-size: var(--fs-5);
margin-bottom: 15px;
max-width: 200px;
}

.contact-item {
display: flex;
justify-content: flex-start;
align-items: center;
gap: 10px;
margin-bottom: 10px;
}

.contact-item ion-icon { --ionicon-stroke-width: 40px; }

.contact-link,
address {
font-style: normal;
color: var(--gainsboro);
font-size: var(--fs-5);
}

.contact-link:is(:hover, :focus) { color: var(--white); }

.form-text {
font-size: var(--fs-5);
margin-bottom: 20px;
}

.footer-form .input-field {
background: var(--white);
font-size: var(--fs-5);
padding: 15px 20px;
border-radius: 100px;
margin-bottom: 10px;
}

.footer-form .btn { width: 100%; }

.footer-bottom {
--gunmetal: hsl(205, 36%, 17%);
background: var(--gunmetal);
padding-block: 20px;
text-align: center;
}

.copyright {
color: var(--gainsboro);
font-size: var(--fs-5);
margin-bottom: 10px;
}

.copyright a {
color: inherit;
display: inline-block;
}

.copyright a:is(:hover, :focus) { color: var(--white); }

.footer-bottom-list {
display: flex;
align-items: center;
justify-content: center;
gap: 21px;
}

.footer-bottom-list > li { position: relative; }

.footer-bottom-list > li:not(:last-child)::after {
content: "";
position: absolute;
top: 3px;
right: -10px;
bottom: 3px;
width: 1px;
background: hsla(0, 0%, 100%, 0.2);
}

.footer-bottom-link {
color: var(--gainsboro);
font-size: var(--fs-7);
transition: var(--transition);
}

.footer-bottom-link:is(:hover, :focus) { color: var(--white); }





/*-----------------------------------*\
* #GO TO TOP
\*-----------------------------------*/

.go-top {
position: fixed;
bottom: 15px;
right: 15px;
width: 35px;
height: 35px;
background: var(--bright-navy-blue);
color: var(--white);
display: grid;
place-items: center;
font-size: 18px;
border-radius: 6px;
box-shadow: 0 1px 3px hsla(0, 0%, 0%, 0.5);
opacity: 0;
transform: translateY(10px);
visibility: hidden;
transition: var(--transition);
}

.go-top.active {
opacity: 0.8;
transform: translateY(0);
visibility: visible;
}

.go-top:is(:hover, :focus) { opacity: 1; }





/*-----------------------------------*\
* #MEDIA QUERIES
\*-----------------------------------*/

/**
* responsive for larger than 580px screen
*/

@media (min-width: 580px) {

/**
 * REUSED STYLE
 */

.container {
  max-width: 580px;
  margin-inline: auto;
}

.btn {
  --fs-5: 16px;
  --padding: 12px 30px;
}

section:not(.cta) :is(.section-subtitle, .section-title, .section-text) {
  text-align: center;
}

.section-text { margin-bottom: 40px; }

.card-text { --fs-5: 15px; }



/**
 * HEADER
 */

.header { padding-top: 83px; }

.helpline-box .icon-box { padding: 14px; }

.header-top .logo img { max-width: unset; }

.search-btn { font-size: 30px; }

.nav-open-btn { font-size: 40px; }

.header .btn {
  --fs-5: 14px;
  --padding: 6px 20px;
}



/**
 * HERO
 */

.hero {
  min-height: 800px;
  padding-top: 85px;
}

.hero-text { --fs-5: 15px; }

.btn-group { gap: 20px; }



/**
 * TOUR SEARCH
 */

.tour-search-form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  align-items: flex-end;
  gap: 15px;
}

.tour-search-form .input-wrapper { margin-bottom: 0; }

.tour-search-form .input-field { padding: 16px 20px; }

.tour-search .btn {
  grid-column: span 2;
  margin-top: 20px;
}



/**
 * POPULAR
 */

.popular-card .card-content { right: auto; }



/**
 * FOOTER
 */

.footer .container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 30px;
}

.footer-form { grid-column: span 2; }

.footer-bottom { text-align: left; }

.copyright { margin-bottom: 0; }

.footer-bottom-list { justify-content: flex-end; }

}





/**
* responsive for larger than 768px screen
*/

@media (min-width: 768px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-5: 15px;

}



/**
 * REUSED STYLE
 */

.container { max-width: 800px; }

.section-text {
  max-width: 60ch;
  margin-inline: auto;
}



/**
 * HEADER
 */

.helpline-box {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  gap: 10px;
}

.helpline-box .wrapper {
  display: block;
  color: var(--white);
  font-size: var(--fs-6);
}

.social-list { gap: 10px; }



/**
 * POPULAR
 */

.popular-list {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 30px;
  margin-bottom: 50px;
}

.popular-list > li:not(:last-child) { margin-bottom: 0; }

.popular-card .card-content { right: 20px; }



/**
 * PACKAGE
 */

.package-list { margin-bottom: 50px; }

.package-list > li:not(:last-child) { margin-bottom: 40px; }

.package-card {
  display: grid;
  grid-template-columns: 1.3fr 1.5fr 1fr;
}

.package-card .card-banner { height: 100%; }

.package-card .card-content { padding: 40px; }

.package-card .card-price {
  display: grid;
  place-content: center;
}

.package-card .card-price .wrapper { margin-bottom: 15px; }



/**
 * GALLERY
 */

.gallery { padding-bottom: calc(var(--section-padding * 2)); }

.gallery-list {
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.gallery-image { border-radius: var(--radius-25); }



/**
 * CTA
 */

.cta .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.cta-content { width: calc(100% - 225px); }

.cta .section-text { margin-inline: 0; }



/**
 * FOOTER
 */

.form-wrapper {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  gap: 20px;
}

.footer-form .input-field { margin-bottom: 0; }

.footer-form .btn { width: max-content; }

}





/**
* responsive for larger than 992px screen
*/

@media (min-width: 992px) {

/**
 * REUSED STYLE
 */

.container { max-width: 1050px; }



/**
 * HEADER
 */

.header.active .header-top {
  position: unset;
  background: unset;
}

.nav-open-btn,
.navbar-top { display: none; }

.header-bottom { border-bottom: none; }

.header.active .header-bottom {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background: var(--white);
  color: var(--onyx);
  box-shadow: 0 2px 5px hsla(0, 0%, 0%, 0.08);
  transition: var(--transition);
}

.header-bottom .container { padding-block: 0; }

.header .navbar { all: unset; }

.navbar-list {
  border-top: none;
  display: flex;
  justify-content: center;
  align-items: center;
}

.navbar-list li { border-bottom: none; }

.navbar-link {
  color: var(--white);
  --fs-4: 16px;
  font-weight: unset;
  text-transform: uppercase;
  padding: 20px 15px;
}

.header.active .navbar-link { color: var(--onyx); }

.header.active .navbar-link:is(:hover, :focus) { color: var(--bright-navy-blue); }

.header.active .social-link {
  color: var(--onyx);
  border-color: hsla(0, 0%, 0%, 0.15);
}

.overlay { display: none; }



/**
 * HERO
 */

.hero .container { max-width: 740px; }



/**
 * TOUR SEARCH
 */

.tour-search-form { grid-template-columns: repeat(5, 1fr); }

.tour-search .btn {
  --padding: 15px;
  grid-column: unset;
  margin-top: 0;
}



/**
 * POPULAR
 */

.popular-list { grid-template-columns: repeat(3, 1fr); }



/**
 * PACKAGE
 */

.meta-box { --fs-8: 13px; }

.meta-box > ion-icon { font-size: 15px; }



/**
 * CTA 
 */

.cta .section-title { max-width: 25ch; }



/**
 * FOOTER
 */

.footer-top .container {
  grid-template-columns: repeat(3, 1fr);
  gap: 50px;
}

.footer-form { grid-column: unset; }

.form-wrapper { flex-direction: column; }

.footer-form .btn { width: 100%; }

}





/**
* responsive for larger than 1200px screen
*/

@media (min-width: 1200px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * spacing
   */

  --section-padding: 100px;

}



/**
 * REUSED STYLE
 */

.container { max-width: 1180px; }

}
</style>

<script>

'use strict';

/**
 * navbar toggle
 */

const overlay = document.querySelector("[data-overlay]");
const navOpenBtn = document.querySelector("[data-nav-open-btn]");
const navbar = document.querySelector("[data-navbar]");
const navCloseBtn = document.querySelector("[data-nav-close-btn]");
const navLinks = document.querySelectorAll("[data-nav-link]");

const navElemArr = [navOpenBtn, navCloseBtn, overlay];

const navToggleEvent = function (elem) {
  for (let i = 0; i < elem.length; i++) {
    elem[i].addEventListener("click", function () {
      navbar.classList.toggle("active");
      overlay.classList.toggle("active");
    });
  }
}

navToggleEvent(navElemArr);
navToggleEvent(navLinks);



/**
 * header sticky & go to top
 */

const header = document.querySelector("[data-header]");
const goTopBtn = document.querySelector("[data-go-top]");

window.addEventListener("scroll", function () {

  if (window.scrollY >= 200) {
    header.classList.add("active");
    goTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    goTopBtn.classList.remove("active");
  }

});

</script>


<section class="popular" id="destination">
        <div class="container">

          <p class="section-subtitle">Uncover place</p>

          <h2 class="h2 section-title">Popular destination</h2>

          <p class="section-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            It seems to me that some people want to make this announcement, but only the first ones, and no one else. </font><font style="vertical-align: inherit;">The appearance of the praisers. </font><font style="vertical-align: inherit;">Let it be ornamented with elasticity, fit.
          </font></font></p>

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="images/popular-1.jpg" alt="San miguel, italy" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Italy</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">San Miguel</font></font></a>
                  </h3>

                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    It seems to me that some of these people want to spread the word.
                  </font></font></p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="images/popular-2.jpg" alt="Burj khalifa, dubai" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Dubai</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Burj khalifa</font></font></a>
                  </h3>

                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    It seems to me that some of these people want to spread the word.
                  </font></font></p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="images/popular-3.jpg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Japan</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kyoto temple</font></font></a>
                  </h3>

                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    It seems to me that some of these people want to spread the word.
                  </font></font></p>

                </div>

              </div>
            </li>

          </ul>

          <button class="btn btn-primary" style="margin-left: 42%;"> <a href="./?page=packages" >More destintion </a></button>

        </div>
      </section>


	  <section class="gallery" id="gallery">
        <div class="container">

          <p class="section-subtitle">Photo Gallery</p>

          <h2 class="h2 section-title">Photo's From Travellers</h2>

          <p class="section-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            It seems to me that some people want to make this announcement, but only the first ones, and no one else. </font><font style="vertical-align: inherit;">The appearance of the praisers. </font><font style="vertical-align: inherit;">Let it be ornamented with elasticity, fit.
          </font></font></p>

          <ul class="gallery-list">

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="images/gallery-1.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="images/gallery-2.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="images/gallery-3.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="images/gallery-4.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="images/gallery-5.jpg" alt="Gallery image">
              </figure>
            </li>

          </ul>

        </div>
      </section>



<!-- Services-->
<section class="page-section bg-dark" id="home">
	<div class="container">
		<h2 class="text-center">Tour Packages</h2>
	<div class="d-flex w-100 justify-content-center">
		<hr class="border-warning" style="border:3px solid" width="15%">
	</div>
	<div class="row">
		<?php
		$packages = $conn->query("SELECT * FROM `packages` order by rand() limit 3");
			while($row = $packages->fetch_assoc() ):
				$cover='';
				if(is_dir(base_app.'uploads/package_'.$row['id'])){
					$img = scandir(base_app.'uploads/package_'.$row['id']);
					$k = array_search('.',$img);
					if($k !== false)
						unset($img[$k]);
					$k = array_search('..',$img);
					if($k !== false)
						unset($img[$k]);
					$cover = isset($img[2]) ? 'uploads/package_'.$row['id'].'/'.$img[2] : "";
				}
				$row['description'] = strip_tags(stripslashes(html_entity_decode($row['description'])));

				$review = $conn->query("SELECT * FROM `rate_review` where package_id='{$row['id']}'");
				$review_count =$review->num_rows;
				$rate = 0;
				while($r= $review->fetch_assoc()){
					$rate += $r['rate'];
				}
				if($rate > 0 && $review_count > 0)
				$rate = number_format($rate/$review_count,0,"");
		?>
			<div class="col-md-4 p-4 ">
				<div class="card w-100 rounded-0">
					<img class="card-img-top" src="<?php echo validate_image($cover) ?>" alt="<?php echo $row['title'] ?>" height="200rem" style="object-fit:cover">
					<div class="card-body">
					<h5 class="card-title truncate-1 w-100"><?php echo $row['title'] ?></h5><br>
					<div class=" w-100 d-flex justify-content-start">
						<div class="stars stars-small">
								<input disabled class="star star-5" id="star-5" type="radio" name="star" <?php echo $rate == 5 ? "checked" : '' ?>/> <label class="star star-5" for="star-5"></label> 
								<input disabled class="star star-4" id="star-4" type="radio" name="star" <?php echo $rate == 4 ? "checked" : '' ?>/> <label class="star star-4" for="star-4"></label> 
								<input disabled class="star star-3" id="star-3" type="radio" name="star" <?php echo $rate == 3 ? "checked" : '' ?>/> <label class="star star-3" for="star-3"></label> 
								<input disabled class="star star-2" id="star-2" type="radio" name="star" <?php echo $rate == 2 ? "checked" : '' ?>/> <label class="star star-2" for="star-2"></label> 
								<input disabled class="star star-1" id="star-1" type="radio" name="star" <?php echo $rate == 1 ? "checked" : '' ?>/> <label class="star star-1" for="star-1"></label> 
						</div>
                    </div>
    				<p class="card-text truncate"><?php echo $row['description'] ?></p>
					<div class="w-100 d-flex justify-content-end">
						<a href="./?page=view_package&id=<?php echo md5($row['id']) ?>" class="btn btn-sm btn-flat btn-warning">View Package <i class="fa fa-arrow-right"></i></a>
					</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
	<div class="d-flex w-100 justify-content-end">
		<a href="./?page=packages" class="btn btn-flat btn-warning mr-4">Explore Package <i class="fa fa-arrow-right"></i></a>
	</div>
	</div>
</section>
<!-- About-->
<section class="page-section" id="about">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">About Us</h2>
		</div>
		<div>
			<div class="card w-100">
				<div class="card-body">
					<?php echo file_get_contents(base_app.'about.html') ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Contact-->
<section class="page-section" id="contact">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Contact Us</h2>
			<h3 class="section-subheading text-muted">Send us a message for inquiries.</h3>
		</div>
		<!-- * * * * * * * * * * * * * * *-->
		<!-- * * SB Forms Contact Form * *-->
		<!-- * * * * * * * * * * * * * * *-->
		<!-- This form is pre-integrated with SB Forms.-->
		<!-- To make this form functional, sign up at-->
		<!-- https://startbootstrap.com/solution/contact-forms-->
		<!-- to get an API token!-->
		<form id="contactForm" >
			<div class="row align-items-stretch mb-5">
				<div class="col-md-6">
					<div class="form-group">
						<!-- Name input-->
						<input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required />
					</div>
					<div class="form-group">
						<!-- Email address input-->
						<input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
					</div>
					<div class="form-group mb-md-0">
						<input class="form-control" id="subject" name="subject" type="subject" placeholder="Subject *" required />
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group form-group-textarea mb-md-0">
						<!-- Message input-->
						<textarea class="form-control" id="message" name="message" placeholder="Your Message *" required></textarea>
					</div>
				</div>
			</div>
			<div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Send Message</button></div>
		</form>
	</div>
</section>
<script>
$(function(){
	$('#contactForm').submit(function(e){
		e.preventDefault()
		$.ajax({
			url:_base_url_+"classes/Master.php?f=save_inquiry",
			method:"POST",
			data:$(this).serialize(),
			dataType:"json",
			error:err=>{
				console.log(err)
				alert_toast("an error occured",'error')
				end_loader()
			},
			success:function(resp){
				if(typeof resp == 'object' && resp.status == 'success'){
					alert_toast("Inquiry sent",'success')
					$('#contactForm').get(0).reset()
				}else{
					console.log(resp)
					alert_toast("an error occured",'error')
					end_loader()
				}
			}
		})
	})
})
</script>


<a href="#top" class="go-top active" data-go-top="">
    <i class="fa fa-angle-double-up" style="font-size:30px;color:red""></i>
  </a>