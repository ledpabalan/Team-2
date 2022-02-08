<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Check out </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<?php include 'assets/headbuyerside.php'; ?>
</head>
<body>
<?php include 'assets/header2buyerside.php'; ?>
	
<div class="editprofile">
    <br><br><br><br> <br><br><br><br>
<a class="aprodbtn" href="<?php echo site_url('ProductControllerBuyer/index'); ?>"><strong>Back</strong> </a>
	<div class="checkoutbox">
	<h5 class>CHECK OUT</h5>
		
			<?php extract($product); ?>
                    <h3>Your Order:</h3>
				<div class="form-group">
					<h3><label>Product: </label> 
                    <?php echo $product_name; ?> 
				</div>
				<div class="form-group">
                    <h3><label>Price: </label>
                    ₱<?php echo $product_price; ?> 
					</div>

                <br><h2> Please proceed to review the delivery address</h2>
                <a href ="/Team-2/ProductControllerBuyer/checkout2/"> Next

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