<?=isset($message) ? $message : "";?>

<a href='<?php echo base_url()."Product/index"?>'>[ Back to ITEMS ]<i  id="addprod"></i></a><br><br>

<form method='POST'action="<?php echo site_url('Product/addprod2'); ?>">  

                <p>ADD PRODUCT</p><br><br>
                <p>Add Product:</p>
                <input type="text" name="product_name" placeholder="Product Name" required>

                <p>Add Product Description:</p>
                <!--<input type="text" name="product_description" placeholder="Product Description">
                 
-->
                <textarea rows="4" cols="30" name="product_description" placeholer="Enter Description Here..." required>
</textarea>

                <p>Price:</p>
                <input type="number" name="product_price" placeholder="P 0.00" require>

            
                <br>
                <br>
        
                <input type="submit" name ="add product" value="Add Product" require>
                <a href="/Team-2/Homepage">Back to the Homepage</a>
</form> 

               </div>
               


</body>
</html>
