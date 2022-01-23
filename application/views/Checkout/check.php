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

                

<form method="POST" action="/Team-2/checkout">
