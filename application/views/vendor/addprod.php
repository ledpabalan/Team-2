<?=isset($message) ? $message : "";?>

<a href='<?php echo base_url()."Product/index"?>'>[ Back to ITEMS ]<i  id="addprod"></i></a><br><br>

<form method='POST'action="<?php echo site_url('AddProduct/addprod2'); ?>">  

                <p>ADD PRODUCT</p><br><br>
                <p>Add Product:</p>
                <input type="text" name="product_name" placeholder="Product Name" required>

                <p>Add Product Description:</p>
                <!--<input type="text" name="product_description" placeholder="Product Description">
                 
-->
                <textarea rows="4" cols="30" name="product_description" placeholer="Enter Description Here..." required>
</textarea>

                <p>Price:</p>
                <input type="text" name="product_price" placeholder="P 0.00" required>

            
                <br>
                <br>
        
                <input type="submit" name ="add product" value="Add Product" required>
</form> 

               </div>
               


</body>
</html>
