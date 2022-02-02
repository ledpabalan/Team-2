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
       <h3><span>KAMUSTA KAIBIGAN?</span></h3>
        <h3>fresh and <span>classic</span> products for you</h3>
        <p>brought to you by The New Tayuman</p>
        <!-- <a href='<?php echo base_url()."Product/index"?>'>[  Products ]<i  id="vendoritem"></i></a> -->
        <a href='<?php echo base_url()."buyerside/productsec"?>' class="btn">shop now</a>
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
