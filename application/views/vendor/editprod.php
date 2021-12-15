<!DOCTYPE html>
<html>
<head>
	<title>EDIT VIEW</title>
</head>
<body>
<p>EDIT ITEM</p>
<a href='<?php echo base_url()."Product/index"?>'>[ Back to ITEMS ]<i  id="addprod"></i></a><br><br>
<?php  
         foreach ($i->result() as $row)  
         {  
            ?><tr>  
           <br>

           <a href='<?php echo base_url()."Product/viewprod"?>'>|  Edit Product  |<i  id="editprod"></i></a>
           <a href='<?php echo base_url()."Product/viewprod"?>'>|  Delete Product  |<i  id="deleteprod"></i></a>
           <?php echo $row->product_id;?> 
           <?php echo $row->product_name;?> 
           <?php echo $row->product_description;?>
           <?php echo $row->product_price;?> 

         
            </tr> 
           
           

            <br>
         
         <?php 
         } 

         ?>  

</body>
</html>
