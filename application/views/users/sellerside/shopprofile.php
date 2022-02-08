<!DOCTYPE html>
<html lang="en">
<head>

<?php include 'assets/headsellerside.php'; ?>
</head>
<body>
    <?php include 'assets/header2sellerside.php'; ?>  

<!-- shop profile section starts  -->

    <div class="profile">   
            <h5>My Account</h5>
            <a href='<?php echo base_url()."userssellerside/viewUser"?>'>Seller Profile</a> <br>
            <a class="active " href='<?php echo base_url()."userssellerside/shopprofile"?>'>Shop Profile</a> <br>
            <a href='<?php echo base_url()."Userssellerside/edituser"?>'>Settings</a><br>

            <a class="lobtn" href= '<?php echo base_url()."/logout"?>'>LOG OUT</a>

        <div class="shop-profilebox">

            <div class="image-avatar">
                <img class="avatar" src="<?php echo base_url(); ?>assets/images/shoppicture.svg">
            </div>
            <div class="background-content">
                <img class="background-avatar" src="<?php echo base_url(); ?>assets/images/shopcover.png">
            </div>
            
            <h1>SHOP NAME : SHOP'S NAME</h1>
            <h4>Lets go NewTayuman!
            <h3>Open Hours: 7:00 - 17:00</h3><h2>Email : Shopname@gmail.com</h2>
            <h3>Contact us: 09999999999</h3></h4>
            
        </div>

    </div>

<!-- shop profile section ends  -->

<?php include 'assets/sellerfooter.php'; ?>  


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

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
