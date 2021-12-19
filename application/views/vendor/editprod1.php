<?=isset($message) ? $message : "";?>


<form method='POST'action="<?php echo site_url('Product/updateprod1'); ?>">  
                <input type="hidden" name="product_id" value ="<?php echo $item['product_id']?>"> 
                    <!--^^^^ Dito nagkakaproblema eh, di niya nakukuha data sa database ~chy-->
                <p>EDIT PRODUCT</p><br><br>
                <p>Product:</p>
                <input type="text" name="product_name" value='<?php echo $item['product_name']?>' placeholder="Product Name" required>

                <p>Product Description:</p>
                <textarea rows="4" cols="30" name="product_description" value='<?php echo $item['product_description']?>' placeholer="Enter Description Here..." required> </textarea>

                <p>Price:</p>
                <input type="text" name="product_price" value='<?php echo $item['product_price']?>' placeholder="P 0.00" required>

            
                <br>
                <br>
        
                <input type="submit" name ="Edit product" value="Edit Product" required>
</form> 

               </div>
               


</body>
</html>
