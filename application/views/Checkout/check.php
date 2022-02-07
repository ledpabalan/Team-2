<?=isset($message) ? $message : "";?>
<!DOCTYPE html>
<html>
<head></head>
<body>
    <?php include 'assets/header2buyerside.php'; ?>

    <div class="editprofile">

        <a class="aprodbtn" href="<?php echo site_url('ProductControllerBuyer/checkout/2'); ?>"><strong>Back</strong> </a>

        <div class="checkout2box">

            <form method="POST" action="<?php echo base_url(); ?>ProductControllerBuyer/checkout3/">
                <h5>Your Information:</h5>

                <input type="hidden" name="user_id" value="<?php echo $user['user_id'] ?>">

                <h3>Full Name:
                    <label><?php echo $user['user_name'] ?></label>
                </h3>

                <h3>Address:
                    <label><?php echo $user['user_address'] ?></label>
                </h3>

                <h3>Contact Number:
                    <label><?php echo $user['user_contact_no'] ?></label>
                </h3>

                <h2><b>Note: Please check your information before proceeding to checkout</b></h2>

                <h5> Mode of Payment </h5>
                <input type="radio" id="Payment-Type1" name="mop" value="Cash on Delivery"> <span>Cash on Delivery</span>
               

                <br> <br>

</body>
</html>
   
    

