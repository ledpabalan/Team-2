<!DOCTYPE html>
<html lang="en">
<head>

<?php include 'assets/headsellerside.php'; ?>

</head>
<body>
<?php include 'assets/header2sellerside.php'; ?>   

<!-- queue order section starts  -->

    <div class="profile">   
        <h5>My Orders</h5>
            <a href='<?php echo base_url()."Userssellerside/sellerpenorder"?>'>Pending</a><br>
            <a class="active" href='<?php echo base_url()."Userssellerside/sellerqorder"?>'>Queue</a><br>
            <a href='<?php echo base_url()."Userssellerside/sellercomorder"?>'>Completed</a><br>

        <div class="seller-orderbox">

        <section class="pending-order" id="pending-order">

            <div class="box-container">

                 <div class="box">
                     <div class="ordernum"><h2>Order No.</h2></div>
                     <div class="username"><h2>Username</h2></div>
                     <div class="itemname"><h2>Item</h2></div>
                     <div class="quantityname"><h2>Quantity</h2></div>
                     <div class="total"><h2>Total Price</h2></div>
                     <img src="./images/cheesebread.jpg" alt="">
                     <h1>0000000X</h1>
                     <h6>@Username</h6>
                     <h3>Cheese bread</h3>
                     <h4>x2</h4>
                     <h5>P30</h5>
                     <input type="submit" value="FINISH ORDER" class="pbtn">
                     <input type="submit1" value="CANCEL ORDER" class="pbtn">
                 </div><br>

                 
                 <div class="box">
                     <div class="ordernum"><h2>Order No.</h2></div>
                     <div class="username"><h2>Username</h2></div>
                     <div class="itemname"><h2>Item</h2></div>
                     <div class="quantityname"><h2>Quantity</h2></div>
                     <div class="total"><h2>Total Price</h2></div>
                     <img src="./images/cheesebread.jpg" alt="">
                     <h1>0000000X</h1>
                     <h6>@Username</h6>
                     <h3>Cheese bread</h3>
                     <h4>x1</h4>
                     <h5>P15</h5>
                     <input type="submit" value="FINISH ORDER" class="pbtn">
                     <input type="submit1" value="CANCEL ORDER" class="pbtn">
                 </div><br>




        </section>
            
        </div>

    </div>

<!-- queue order section ends  -->

<?php include 'assets/sellerfooter.php'; ?>  




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
