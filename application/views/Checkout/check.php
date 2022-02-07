<?=isset($message) ? $message : "";?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<form method="POST" action="<?php echo base_url(); ?>ProductControllerBuyer/checkout3/">
				<h2>Your Information:</h2>
				
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

				<p><b>Note: Please check your information before proceeding to checkout</b></p>
				<br>
				<h2> Mode of Payment </h2>
				<input type="radio" id="Payment-Type1" name="mop" value="Cash on Delivery" Required> Cash on Delivery

				<br> <br> 
				
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Submit</button>

</body>
</html>
   
    

