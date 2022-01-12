<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The New Tayuman</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/signup.css">
</head>
    <body>
        <div class="signupbox">
            <img class="wave" src="<?php echo base_url(); ?>assets/images/loginbg.png">    
            <div class="img">
                <img src="<?php echo base_url(); ?>assets/images/loginpic1.png"> 
            </div>
            <div class="wrapper">
                <form method= "POST">
                    <h2 class="title">SIGN UP</h2>
                    <div class="box">
                        <input type="radio" id="Account-Type1" name="user_type"value="Customer">
                        <input type="radio" id="Account-Type2" name="user_type"value="Vendor">
                        <label for="Account-Type1" class="Account-Type1">
                            <div class="dot"></div>
                            <div class="text">Customer</div>
                        </label>
                        <label for="Account-Type2" class="Account-Type2">
                            <div class="dot"></div>
                            <div class="text">Vendor</div>
                        </label>
                    <button type="submit" value="submit">Next</button>
                    <h5>Already have an account?</h5>
                    <a href="<?php echo base_url(); ?>users/login">Sign In</a>
            </form>
        </div>
        
    </body>
</html>