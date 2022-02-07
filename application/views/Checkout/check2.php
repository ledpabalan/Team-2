<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Check out </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">CHECK OUT</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<hr>
			<?php extract($product); ?>
                    <h2>Your Order:</h2>
				<div class="form-group">
					<h3><label>Product: </label> 
                    <?php echo $product_name; ?> 
				</div>
				<div class="form-group">
                    <h3><label>Price: </label>
                    ₱<?php echo $product_price; ?> 
				</div>	

                <br><p> Please proceed to review the delivery address</p>
                <a href ="/Team-2/ProductControllerBuyer/checkout2/"> Next

			</form> 
		</div>
	</div>
</div>
</body>
</html>