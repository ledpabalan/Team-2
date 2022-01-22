<?=isset($message) ? $message : "";?>
<form method="POST" action="/Team-2/users/updateUser/">

                <input type="hidden" name="user_id" value ="<?php echo $user['user_id']?>">

                <p>Full Name:
                <?php echo $user['user_name']?> 
                </p>        

                <p>Address:
                <?php echo $user['user_address']?>
                </p>       

                <p>Contact Number:
                <?php echo $user['user_contact_no']?>
                </p>       

<form method="POST" action="<?php echo base_url(); ?>ProductController/update/<?php echo $product_id; ?>">
                <input type="hidden" name="product_id" value =" <?php echo $product_id; ?>">
                <h4> YOUR ORDER </h4>
                <p>Product Name:
                <?php echo $product_name; ?>
                </p>       
                <h4> PLEASE PREPARE THIS EXACT PRICE FOR DELIVERY </h4>
                <p>Price:
                ₱ <?php echo $product_price; ?>
                </p>   
