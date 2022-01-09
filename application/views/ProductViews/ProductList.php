<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Product List - Seller Side Interface</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">PRODUCT LIST</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
		<a href="/Team-2/Homepage">Back to the Homepage</a><br><br>
		
			<a href="<?php echo base_url(); ?>ProductController/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a><br><br>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<!-- <th>ID</th> -->
						<th>Product Name</th>
						<th>Product Description</th>
						<th>Product Price</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($product as $product_a){
						?>
						<tr>
							<!-- <td><?php echo $product_a->product_id; ?></td> -->
							<td><?php echo $product_a->product_name; ?></td>
							<td><?php echo $product_a->product_description; ?></td>
							<td><?php echo $product_a->product_price; ?></td>
							
							<td><a href="<?php echo base_url();?>ProductController/edit/<?php echo $product_a->product_id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> || <a href="<?php echo base_url(); ?>ProductController/delete/<?php echo $product_a->product_id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
						    
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>