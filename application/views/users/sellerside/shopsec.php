<!DOCTYPE html>
<html lang="en">
<head>

<?php include 'assets/headsellerside.php'; ?>

</head>
<body>
<?php include 'assets/header2sellerside.php'; ?>  

<!-- shops section starts  -->

<<section class="shops" id="shops">

<h1 class="heading"> our <span>shops</span> </h1>
<h1 class="heading"> Buyer-Side </h1>

<div class="box-container">


        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/shop logo.png" alt="">
            <h3>Shop Name</h3>
            <div class="price"> Starts at ₱4.99- </div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href='<?php echo base_url()."users/usershop"?>' class="btn">Check now</a>
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/shop logo.png" alt="">
            <h3>Shop Name</h3>
            <div class="price"> Starts at ₱4.99- </div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href='<?php echo base_url()."users/usershop"?>' class="btn">Check now</a>
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/shop logo.png" alt="">
            <h3>Shop Name</h3>
            <div class="price"> Starts at ₱4.99- </div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href='<?php echo base_url()."users/usershop"?>' class="btn">Check now</a>
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/shop logo.png" alt="">
            <h3>Shop Name</h3>
            <div class="price"> Starts at ₱4.99- </div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href='<?php echo base_url()."users/usershop"?>' class="btn">Check now</a>
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/shop logo.png" alt="">
            <h3>Shop Name</h3>
            <div class="price"> Starts at ₱4.99- </div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href='<?php echo base_url()."users/usershop"?>' class="btn">Check now</a>
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/shop logo.png" alt="">
            <h3>Shop Name</h3>
            <div class="price"> Starts at ₱4.99- </div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href='<?php echo base_url()."users/usershop"?>' class="btn">Check now</a>
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/shop logo.png" alt="">
            <h3>Shop Name</h3>
            <div class="price"> Starts at ₱4.99- </div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href='<?php echo base_url()."users/usershop"?>' class="btn">Check now</a>
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/shop logo.png" alt="">
            <h3>Shop Name</h3>
            <div class="price"> Starts at ₱4.99- </div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href='<?php echo base_url()."users/usershop"?>' class="btn">Check now</a>
        </div>

    </div>




</section>

<!-- shops section ends -->



<?php include 'assets/footer.php'; ?>  

<script src="<?php echo base_url(); ?>  https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="<?php echo base_url(); ?>assets/script.js"></script>

<script>
/*script for nav bar */
let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
searchForm.classList.toggle('active');
shoppingCart.classList.remove('active');
loginForm.classList.remove('active');
navbar.classList.remove('active');
}

let shoppingCart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () =>{
shoppingCart.classList.toggle('active');
searchForm.classList.remove('active');
loginForm.classList.remove('active');
navbar.classList.remove('active');
}

let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>{
loginForm.classList.toggle('active');
searchForm.classList.remove('active');
shoppingCart.classList.remove('active');
navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
navbar.classList.toggle('active');
searchForm.classList.remove('active');
shoppingCart.classList.remove('active');
loginForm.classList.remove('active');
}

window.onscroll = () =>{
searchForm.classList.remove('active');
shoppingCart.classList.remove('active');
loginForm.classList.remove('active');
navbar.classList.remove('active');
}
</script>

<script>
/*shop slider*/
var swiper = new Swiper(".shop-slider", {
loop:true,
spaceBetween: 20,
autoplay: {
    delay: 7500,
    disableOnInteraction: false,
},
centeredSlides: true,
breakpoints: {
  0: {
    slidesPerView: 1,
  },
  768: {
    slidesPerView: 2,
  },
  1020: {
    slidesPerView: 3,
  },
},
});
</script>

</body>
</html>
