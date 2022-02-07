<?= isset($message) ? $message : ""; ?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Product Add - Seller Side Interface</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
    <?php include 'assets/headbuyerside.php'; ?>
</head>

<body>
    <?php include 'assets/header2buyerside.php'; ?>

    <div class="editprofile">

        <a class="aprodbtn" href="<?php echo site_url('ProductControllerBuyer/checkout/2'); ?>"><strong>Back</strong> </a>

        <div class="checkout2box">

            <form method="POST" action="<?php echo base_url(); ?>ProductControllerBuyer/checkout3/">
                <h5>Your Information:</h5>

                <input type="hidden" name="user_id" value="<?php echo $user['user_id'] ?>">

                <h3>Full Name:
                    <label><?php echo $user['user_name'] ?></label>
                </h3>

                <h3>Address:
                    <label><?php echo $user['user_address'] ?></label>
                </h3>

                <h3>Contact Number:
                    <label><?php echo $user['user_contact_no'] ?></label>
                </h3>

                <h2><b>Note: Please check your information before proceeding to checkout</b></h2>

                <h5> Mode of Payment </h5>
                <input type="radio" id="Payment-Type1" name="mop" value="Cash on Delivery"> <span>Cash on Delivery</span>
               

                <br> <br>

                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Submit</button>
            </form>
        </div>
    </div>
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