<?=isset($message) ? $message : "";?>

<form method='POST'action="<?php echo site_url('AddProduct/addprod'); ?>">  

                <p>ADD PRODUCT</p><br><br>
                <p>Add Product:</p>
                <input type="text" name="product_name" placeholder="Product Name">

                <p>Add Product Description:</p>
                <!--<input type="text" name="product_description" placeholder="Product Description">
                 
-->
                <textarea rows="4" cols="30" name="product_description" placeholer="Enter Description Here...">
</textarea>

                <p>Price:</p>
                <input type="number" name="product_price" step="0.01" placeholder="P 0.00">

            
                <br>
                <br>
        
                <input type="submit" name ="add product" value="Add Product">
</form> 

               </div>


</body>
</html>
