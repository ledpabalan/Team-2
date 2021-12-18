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
			<h3>Add Form
				<span class="pull-right"><a href="<?php echo site_url('ProductController/index'); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<form method="POST" action="<?php echo base_url(); ?>ProductController/insert">
				<div class="form-group">
					<label>Product Name:</label>
					<input type="text" class="form-control" name="product_name">
				</div>
				<div class="form-group">
					<label>Product Description:</label>
					<input type="text" class="form-control" name="product_description">
				</div>
				<div class="form-group">
					<label>Product Price:</label>
					<input type="text" class="form-control" name="product_price">
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>