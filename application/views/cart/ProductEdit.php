<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>CART</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<?php include 'assets/headsellerside.php'; ?>
</head>
<body>
<?php include 'assets/header2sellerside.php'; ?>
<div class="editprofile">
<a class="aprodbtn" href="<?php echo site_url('ProductController/index'); ?>"><strong>Back</strong> </a>
	<div class="editprofilebox">
			<?php extract($product); ?>
			<form method="POST" action="<?php echo base_url(); ?>CartController/insert/<?php echo $product_id; ?>">
			<h5>Product Edit</h5>
					<h3>Product Name:</h3>
					<input type="text" class="form-control" value="<?php echo $product_name; ?>" name="product_name">

					<h3>Product Seller ID:</h3>
					<input type="text" class="form-control" value="<?php echo $product_sellerid; ?>"name="product_sellerid">
			
					<h3>Product Description:</h3>
					<input type="text" class="form-control" value="<?php echo $product_description; ?>"name="product_description">
		
					<h3>Product Price:</h3>
					<input type="text" class="form-control" value="<?php echo $product_price; ?>"name="product_price">
                    <!--<img  class="avatar"src="<?php echo base_url(); ?>assets/images/foodlogo.png" alt="">-->

					<h3><label>Product Category:</h3>
					<input type="text" class="form-control" value="<?php echo $product_category; ?>"name="product_category">
					<br>
					<br>
					<br>
					
					<h3>Product Quantity:</h3>
					<input type="text" class="form-control" value="<?php echo $product_quantity; ?>"name="product_quantity">
					<br>
					<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Add to Cart</button>
			</form>
		


				</div>

			</form>
	
	</div>
</div>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

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