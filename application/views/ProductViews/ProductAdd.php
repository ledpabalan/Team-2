  
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Product Add - Seller Side Interface</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<?php include 'assets/headsellerside.php'; ?>
</head>

<body>
	<?php include 'assets/header2sellerside.php'; ?>
	
	<div class="editprofile">

	
		<a class="aprodbtn" href="<?php echo site_url('ProductControllerSeller/index'); ?>"><strong>Back</strong> </a>
	<div class="addproductbox">
	<h5>Add Product</h5>
			<form method="POST" action="<?php echo base_url(); ?>ProductControllerSeller/insert">

				<h3>Product Name:</h3><br>
				<input type="text" class="form-control" name="product_name" required>


				<h3>Product Description:</h3>
				<textarea rows="4" cols="30" name="product_description" placeholder="Enter Description Here..." required></textarea>


				<h3>Product Price:</h3>
				<input type="text" class="form-control" name="product_price" required>
				<br>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</form>

			<div class="form-group">
				<br><label>Product Category:</label><br><br> 
					<input type="radio" class="form-control" name="product_category" value= "Classics" required>
					<label>Classics</label>
					<br> 
					<input type="radio" class="form-control" name="product_category" value= "Budget Meal" required>
					<label>Budget Meal</label>
					<br> 
					<input type="radio" class="form-control" name="product_category" value= "Refreshers" required>
					<label>Refreshers</label>
					<br> 
					<input type="radio" class="form-control" name="product_category" value= "Sweet & Dessert" required>
					<label>Sweet & Dessert</label>
				</div>
		</div>

	</div>
</body>

</html>