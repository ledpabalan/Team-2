<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'assets/headsellerside.php'; ?>

</head>
<body>
<?php include 'assets/header2sellerside.php'; ?>  

<!-- profile section starts  -->

        <div class="profile">   
            <h5>My Account</h5>
            <a href='<?php echo base_url()."userssellerside/viewUser"?>'>Profile</a> <br>
            <a class="active" href='<?php echo base_url()."userssellerside/allpurchases"?>'>Purchases</a> <br>
            <a href='<?php echo base_url()."userssellerside/edituser"?>'>Settings</a><br>
            <a class="lobtn" href= '<?php echo base_url()."/logout"?>'>LOG OUT</a>
   
        <div class="productbox">
            <a href='<?php echo base_url()."userssellerside/allpurchases"?>'>All</a> 
            <a href='<?php echo base_url()."userssellerside/recpurchases"?>'>To Receive</a> 
            <a class="active" href='<?php echo base_url()."userssellerside/compurchases"?>'>Completed</a> 
            <a href='<?php echo base_url()."userssellerside/trpurchases"?>'>To Rate</a> 


        <section class="products-buy" id="products-buy">

            <div class="box-container">

                <div class="box">
                    <h2>Shop Name</h2>
                    <img src="./images/coffeebryant.png" alt="">
                    <h1>Completed</h1>
                    <input type="submit" value="BUY AGAIN" class="pbtn">
                    <input type="submit" value="DETAILS" class="pbtn1">
                    <h3>Coffee Bryant</h3>
                    <p>Price : ₱ 20.00</p>
                     <p>Quantity : x1</p>
                    
                </div><br>
            </div>

        </section>
            
        </div>

    </div>

<!-- profile section ends  -->

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


</body>
</html>
