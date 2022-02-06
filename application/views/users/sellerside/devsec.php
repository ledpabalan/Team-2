<!DOCTYPE html>
<html lang="en">
<head>

<?php include 'assets/headsellerside.php'; ?>

</head>
<body>
<?php include 'assets/header2sellerside.php'; ?>  

<!-- developers section starts  -->

<section class="shops" id="shops">

    <h1 class="heading"> The <span>developers</span> </h1>

</section>
<section class="developers" id="developers">

    <h1 class="heading"> <span>Front-End</span> </h1>

    <div class="box-container">


            <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/profile.png" alt="">
                <p>Front-End Member</p>
                <h3>Carlo M. Salva</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/profile.png" alt="">
                <p>Front-End Member</p>
                <h3>Foehn R. Dela Cruz</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/profile.png" alt="">
                <p>Front-End Member</p>
                <h3>Jheanne R. Aguilar</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

</section>

<section class="developers" id="developers">

    <h1 class="heading"> <span>Back-End</span> </h1>

    <div class="box-container">

            <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/profile.png" alt="">
                <p>Team Leader, Backend-Member</p>
                <h3>Louise D. Pabalan</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/profile.png" alt="">
                <p>Back-End Member</p>
                <h3>John Edward Complido</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/profile.png" alt="">
                <p>Back-End Member</p>
                <h3>Jairus Ivan Iscala</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/profile.png" alt="">
                <p>Back-End Member</p>
                <h3>Levi Tuya</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>


</section>

<!-- developers section ends -->


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
