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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/signdown.css">

</head>

<body>
    <div class="signupbox">
        <img class="wave" src="<?php echo base_url(); ?>assets/images/loginbg.png">
        <div class="img">
            <img src="<?php echo base_url(); ?>assets/images/loginpic.png">
        </div>
        <div class="signup-content">
            <form method="POST" action="<?= base_url('users/vendorvalidation') ?>" autocomplete="off">
                <h2 class="signup-title">Sign up</h2>      
                <h5 class="create">Create an account for free!</h5>

                <!-- Shop Name -->
                <div class="sign-up-input name">
                    <div class="sign-up-icons">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <div class="div">
                        <input type="text" name="shop_name" placeholder="Shop Name">
                    </div>
                </div>

                <!-- Shop Name -->
                <div class="sign-up-input name">
                    <div class="sign-up-icons">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" name="shop_username" placeholder="Shop Username">
                    </div>
                </div>


                <!-- Shop's Email -->
                <div class="sign-up-input email">
                    <div class="sign-up-icons">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <input type="email" name="shop_email" placeholder="E-mail">
                    </div>
                </div>
                

                <!-- Shop's Password -->
                <div class="sign-up-input password">
                    <div class="sign-up-icons">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" name="shop_password" placeholder="Password">
                    </div>
                </div>

                <!-- Shop's Password Confirmation -->
                <div class="sign-up-input pwdrepeat">
                    <div class="sign-up-icons">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" name="shop_passwordconfirmation" placeholder="Confirm Password">
                    </div>
                </div>
                
                <!-- Shop Submit Registration -->
                <button type="submit">Sign Up</button>

                <!-- Shop has account - go to login page -->
                <h5>Already have an account?</h5>
                <a href="<?php echo base_url(); ?>users/login">Sign In</a>
            </form>
        </div>
    </div>
</body>

</html>