<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'assets/head.php'; ?>

</head>
<body>
    <?php include 'assets/header2.php'; ?>  
<!-- usershop section starts  -->


<section class="all-products" id="all-products">

<h1 class="heading">all<span>products</span> </h1>

<div class="box-container">

    <div class="box">
        <img src="<?php echo base_url(); ?>assets/images/foodlogo.png" alt="">
        <h3>Product Name</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
        <a href="#popup1" class="rbtn">read more</a>
    </div>

    <div class="box">
        <img src="<?php echo base_url(); ?>assets/images/foodlogo.png" alt="">
        <h3>Product Name</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
        <a href="#popup1" class="rbtn">read more</a>
    </div>

    <div class="box">
        <img src="<?php echo base_url(); ?>assets/images/foodlogo.png" alt="">
        <h3>Product Name</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
        <a href="#popup1" class="rbtn">read more</a>
    </div>

    <div class="box">
        <img src="<?php echo base_url(); ?>assets/images/foodlogo.png" alt="">
        <h3>Product Name</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
        <a href="#popup1" class="rbtn">read more</a>
    </div>

    <div class="box">
        <img src="<?php echo base_url(); ?>assets/images/foodlogo.png" alt="">
        <h3>Product Name</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
        <a href="#popup1" class="rbtn">read more</a>
    </div>

</section>
    
    <div id="popup1" class="overlay">
        <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
                <img src="<?php echo base_url(); ?>assets/images/foodlogo.png" alt="">
                <h2>ITEM NAME</h2>
                <h3>₱ 00.00</h3>
                <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</h1>
                <h4>QUANTITY :</h4>
                <div class="quantity">
                    <button class="btn minus-btn disabled" type="button">-</button>
                    <input type="text" id="quantity" value="0">
                    <button class="btn plus-btn" type="button">+</button>
                </div> 
                <div class="atc-btn">
                    <div class="fas fa-shopping-cart"> Add To Cart</div>
                </div>
            </div>
        </div>
    </div>

<!-- usershop section ends -->

<?php include 'assets/footer.php'; ?>  

<script src="<?php echo base_url(); ?>https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

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
    /*quantity script */
    document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
var valueCount
document.querySelector(".plus-btn").addEventListener("click", function() {
    valueCount = document.getElementById("quantity").value;

    valueCount++;

    document.getElementById("quantity").value = valueCount;

    if (valueCount >= 0) {
        document.querySelector(".minus-btn").removeAttribute("disabled");
        document.querySelector(".minus-btn").classList.remove("disabled")
    }
})
document.querySelector(".minus-btn").addEventListener("click", function() {

    valueCount = document.getElementById("quantity").value;

    valueCount--;

    document.getElementById("quantity").value = valueCount

    if (valueCount == 0) {
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
    }
})
</script>

</body>
</html>
