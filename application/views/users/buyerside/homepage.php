<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'assets/headbuyerside.php'; ?>

</head>
<body>
    <?php include 'assets/header2buyerside.php'; ?>  
    
<!-- home section starts  -->

<section class="home" id="home">
    <div class="content">
       
        <h3>fresh and <span>classic</span> products for you</h3>
        <p>brought to yours by The New Tayuman</p>
        <!-- <a href='<?php echo base_url()."Product/index"?>'>[  Products ]<i  id="vendoritem"></i></a> -->
        <a href='<?php echo base_url()."usersbuyerside/shopsec"?>' class="btn">shop now</a><br><br><br>
    </div>

</section>
<section class="features" id="features">
    <br>
    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img  src="<?php echo base_url(); ?>assets/images/classics.svg">
            <h3>Tayuman Classics</h3>
            <p>Check out our unique classics</p>
            <a href='<?php echo base_url()."ProductControllerBuyer/index"?>' class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/developers.svg " alt="">
            <h3>about us</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href='<?php echo base_url()."Usersbuyerside/devsec"?>' class="btn">read more</a>
        </div>

    </div>

</section>

<!-- home section ends -->

<?php include 'assets/footer.php'; ?>  



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
