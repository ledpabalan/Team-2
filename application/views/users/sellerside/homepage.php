<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'assets/headsellerside.php'; ?>

</head>
<body>
    <?php include 'assets/header2sellerside.php'; ?>  
    
<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
       <h3><span>Seller</span></h3>
        <h3>fresh and <span>classic</span> products for you</h3>
        <p>brought to you by The New Tayuman</p>
        <a href='<?php echo base_url()."userssellerside/shopsec"?>' class="btn">shop now</a>
    </div>

</section>
<section class="features" id="features">

    <h1 class="heading"> our <span>features</span> </h1>
    <h1 class="heading"> Buyer-Side </h1>

    <div class="box-container">

        <div class="box">
            <img  src="<?php echo base_url(); ?>assets/images/fea food 1.jpg">
            <h3>Tayuman Classics</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/fea motor 2.jpg" alt="">
            <h3>free delivery</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/fea payment 3.png " alt="">
            <h3>easy payments</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- home section ends -->

<?php include 'assets/footer.php'; ?>  

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="assets/script.js"></script>

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

</body>
</html>
