<?= isset($message) ? $message : ""; ?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Check out </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<?php include 'assets/headsellerside.php'; ?>
</head>

<body>
	<?php include 'assets/header2sellerside.php'; ?>
	<div class="editprofile">
		<a class="aprodbtn" href="<?php echo site_url('ProductControllerBuyer/checkout2'); ?>"><strong>Back</strong> </a>
		<div class="checkoutbox">
			<h6>Your Order has been placed</h6>

			<h4>Please prepare exact amount for the delivery</h4>

			<h1> We're glad you ordered from us! Happy Lamon! </h1>
			<br><br>	
			<br>
			<a class="check3" href="/Team-2/ProductControllerBuyer/index/"> Order Again</a>

			<a class="check3" href="/Team-2/usersbuyerside/homepage/"> Back to homepage</a>
		</div>
	</div>
	<?php include 'assets/footer.php'; ?>

	<script src="<?php echo base_url(); ?>https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

	<!-- custom js file link  -->
	<script src="<?php echo base_url(); ?>assets/script.js"></script>

	<script>
		/*script for nav bar */
		let searchForm = document.querySelector('.search-form');

		document.querySelector('#search-btn').onclick = () => {
			searchForm.classList.toggle('active');
			shoppingCart.classList.remove('active');
			loginForm.classList.remove('active');
			navbar.classList.remove('active');
		}

		let shoppingCart = document.querySelector('.shopping-cart');

		document.querySelector('#cart-btn').onclick = () => {
			shoppingCart.classList.toggle('active');
			searchForm.classList.remove('active');
			loginForm.classList.remove('active');
			navbar.classList.remove('active');
		}

		let loginForm = document.querySelector('.login-form');

		document.querySelector('#login-btn').onclick = () => {
			loginForm.classList.toggle('active');
			searchForm.classList.remove('active');
			shoppingCart.classList.remove('active');
			navbar.classList.remove('active');
		}

		let navbar = document.querySelector('.navbar');

		document.querySelector('#menu-btn').onclick = () => {
			navbar.classList.toggle('active');
			searchForm.classList.remove('active');
			shoppingCart.classList.remove('active');
			loginForm.classList.remove('active');
		}

		window.onscroll = () => {
			searchForm.classList.remove('active');
			shoppingCart.classList.remove('active');
			loginForm.classList.remove('active');
			navbar.classList.remove('active');
		}
	</script>
</body>

</html>