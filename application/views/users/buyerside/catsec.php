<!DOCTYPE html>
<html lang="en">
<head>

<?php include 'assets/headbuyerside.php'; ?>

</head>
<body>
<?php include 'assets/header2buyerside.php'; ?>  
<!-- categories section starts  -->

<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1><br><br>

    <div class="box-container">

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/topfood.png" alt="">
            <h3>classics</h3>
            <p>upto 45% off</p>
            <a href='<?php echo base_url()."CategoryController/Classics"?>' class="btn">shop now</a>
            <!-- <a href='<?php echo base_url()."Usersbuyerside/shopsec"?>' class="btn">shop now</a> -->
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/budgetmeal.png" alt="">
            <h3>budget meal</h3>
            <p>upto 45% off</p>
            <a href='<?php echo base_url()."CategoryController/BudgetMeal"?>' class="btn">shop now</a>
            <!-- <a href='<?php echo base_url()."Usersbuyerside/shopsec"?>' class="btn">shop now</a> -->
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/refreshers.png" alt="">
            <h3>refreshers</h3>
            <p>upto 45% off</p>
            <a href='<?php echo base_url()."CategoryController/Refreshers"?>' class="btn">shop now</a>
            <!-- <a href='<?php echo base_url()."Usersbuyerside/shopsec"?>' class="btn">shop now</a> -->
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/sweets.png" alt="">
            <h3>sweets & dessert</h3>
            <p>upto 45% off</p>
            <a href='<?php echo base_url()."CategoryController/SweetandDesserts"?>' class="btn">shop now</a>
            <!-- <a href='<?php echo base_url()."Usersbuyerside/shopsec"?>' class="btn">shop now</a> -->
        </div>

    </div>

</section>

<!-- categories section ends -->

<?php include 'assets/footer.php'; ?>  



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
