<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'head.php'; ?>

</head>
<body>
    <?php include 'header2.php'; ?>  
<!-- usershop section starts  -->

<section class="shop-profile" id="shop-profile">

    <div class="content">

        <img class="avatar" src="./images/profilepic.png">
    </div>

</section>

<section class="shop-name" id="shop-name">

    <div class="content">
        <h3>shop<span> Name</span></h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star">5.0</i>
        </div>
        
    </div>

</section>

<section class="shop-content" id="shop-content">

    <div class="content">
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more"><h3>Open Hours: 7:00 - 17:00</h3><h2>Email : Shopname@gmail.com</h2>
        <h3>Contact us: 09999999999</h3><h2>Seller : Seller Name</h2> </span></h4>

        <button onclick="myFunction()" id="myBtn">Show more</button>
    </div>

    </div>

</section>

<section class="shop-products" id="shop-products">

<h1 class="heading"><span>products</span> </h1>

<div class="box-container">

    <div class="box">
        <img src="./images/foodlogo.png" alt="">
        <h3>Product Name</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
        <a href="#popup1" class="rbtn">read more</a>
    </div>

    <div class="box">
        <img src="./images/foodlogo.png" alt="">
        <h3>Product Name</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
        <a href="#popup1" class="rbtn">read more</a>
    </div>

    <div class="box">
        <img src="./images/foodlogo.png" alt="">
        <h3>Product Name</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
        <a href="#popup1" class="rbtn">read more</a>
    </div>

    <div class="box">
        <img src="./images/foodlogo.png" alt="">
        <h3>Product Name</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
        <a href="#popup1" class="rbtn">read more</a>
    </div>

    <div class="box">
        <img src="./images/foodlogo.png" alt="">
        <h3>Product Name</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
        <a href="#popup1" class="rbtn">read more</a>
    </div>

</section>
    
    <div id="popup1" class="overlay">
        <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
                <img src="./images/foodlogo.png" alt="">
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

<?php include 'footer.php'; ?>  

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
