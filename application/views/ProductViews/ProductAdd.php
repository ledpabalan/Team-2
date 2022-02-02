  
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Product Add - Seller Side Interface</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Product Add- Seller Side Interface</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Add Form</h3>
			<h4>
				<span class="pull-right"><a href="<?php echo site_url('ProductController/index'); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
		   </h4>
			<hr>
			<form method="POST" action="<?php echo base_url(); ?>ProductController/insert">
				<div class="form-group">

				
				<br><label>Product Name:</label><br>
					<input type="text" class="form-control" name="product_name" required>
				</div>
				<div class="form-group">
				<br><label>Product Description:</label><br>
					<textarea rows="4" cols="30" name="product_description" placeholder="Enter Description Here..." required></textarea>
				</div>
				<div class="form-group">
				<br><label>Product Price:</label><br>
					<input type="text" class="form-control" name="product_price" required>
				</div>
				<div class="form-group">
				<br><label>Product Category:</label><br><br> 
					<input type="radio" class="form-control" name="product_category" value= "Classics" required>
					<label>Classics</label>
					<br> 
					<input type="radio" class="form-control" name="product_category" value= "Top Food" required>
					<label>Top Food</label>
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
				<br><br>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>