<!DOCTYPE html>
<html>
<head>
	<title>ITEM VIEW</title>
</head>
<body>
<p>ITEM VIEW</p>
<a href='<?php echo base_url()."Product/index"?>'>[ Back to ITEMS ]<i  id="addprod"></i></a><br><br>
<?php  
         foreach ($h->result() as $row)  
         {  
            ?><tr>  
           <br>
           <?php echo $row->product_id;?> 
           <?php echo $row->product_name;?> 
           <?php echo $row->product_description;?>
           <?php echo $row->product_price;?> 
            </tr> <br>
         <?php }  
         ?>  

</body>
</html>
