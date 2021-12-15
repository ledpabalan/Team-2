<!DOCTYPE html>
<html>
<head>
	<title>ITEM VIEW</title>
</head>
<body>
<p>ITEM VIEW</p>
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

            <a href='<?php echo base_url()."/Homepage"?>'>go back</a>
         <?php }  
         ?>  
</body>
</html>
