<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The New Tayuman | Sign Up</title>

    <!-- ===== ICON ===== -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/icon.png">

    <!-- ===== FONTS ===== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/signup.css">
</head>

<body>
    <div class="signupbox">
        <img class="wave" src="<?php echo base_url(); ?>assets/images/loginbg.png">
        <div class="img">
            <img src="<?php echo base_url(); ?>assets/images/loginpic.png">
        </div>
        <div class="signup-container">
            <form method="POST">
                <h2 class="title">SIGN UP</h2>
                <h5 class="create">Create an account for free!</h5>
                <div class="box">
                    <input type="radio" id="Account-Type1" name="user_type" value="Buyer">
                    <input type="radio" id="Account-Type2" name="user_type" value="Seller">
                    <label for="Account-Type1" class="Account-Type1">
                        <div class="dot"></div>
                        <div class="text">Customer</div>
                    </label>
                    <label for="Account-Type2" class="Account-Type2">
                        <div class="dot"></div>
                        <div class="text">Vendor</div>
                    </label>
                    <button type="submit" value="submit">Next</button>
                    <a href="#modal" class="modal-open">Terms of Services</a> &
                    <a href="#modal2" class="modal-open">Privacy Policy</a>

                    <div class="modal" id="modal">
                        <div class="modal__content">
                            <a href="#" class="modal__close">&times;</a>
                            <h2 class="modal__heading">Terms of Services</h2>Welcome to the “The New Tayuman” platform. Please read the following Terms of Service carefully before using this Site or opening an account so that you are aware of your legal rights and obligations. The “Services” we provide or make available include (a) the Site, (b) the services provided by the Site and by “The New Tayuman” client software made through the Site, and (c) all information, linked pages, features, data, text, images, messages, or other materials mage available through the Site or its related services. Any new features added to or augmenting the Services are also subject to these Terms of Service. These Terms of Service govern your use of Services provided by the developers of “The New Tayuman”.
                            <br><br>
                            The Services include an online platform service that provides a place and an opportunity for the sale of goods between the buyer and the seller. The actual contract for sale is directly between the buyer and the seller and “The New Tayuman” is not a party to that or any other contract between buyer and seller and accepts no obligations in connection with any such contract. Parties to such transaction will be entirely responsible for the sales contract between them, the listing of goods, warranty of purchase and the like. “The New Tayuman” is not involved in the transaction between users. “The New Tayuman” reserves the right to remove any content provided by you on the site. “The New Tayuman” cannot ensure that users will actually complete a transaction.
                            </p>
                        </div>
                    </div>

                    <div class="modal" id="modal2">
                        <div class="modal__content">
                            <a href="#" class="modal__close">&times;</a>
                            <h2 class="modal__heading">Privacy Policy</h2>Welcome to the “The New Tayuman” platform. “The New Tayuman” takes its responsibilities under applicable privacy laws and regulations seriously and is committed to respecting the privacy rights and concerns of all users of our “The New Tayuman” website. Users refers to a user who registers for an account with us for the use of the services, including both buyers and sellers. We recognize the importance of the personal data you have entrusted to us and believe that it is our responsibility to properly manage, protect and process your personal data. The Privacy Policy is designed to assist you in understanding how we collect, use, disclose and/or process the personal data you have provided to us and/or we possess about you, whether now or in the future, as well as to assist you in making an informed decision before providing us with any of your personal data.
                            <br><br>
                            By using the services, registering for an account with us, visiting our platform, or accessing the services, you acknowledge and agree that you accept the practices, requirements, and/or policies outlined in this Privacy Policy, and you hereby consent to us collecting, using, disclosing an/or processing your personal data as described herein. We reserve the right to amend this Privacy Policy at any time. To the fullest extent permissible under applicable law, your continued use of the services or platform, including placing of any orders, shall constitute your acknowledgment and acceptance of the changes made to this Privacy Policy.
                            </p>
                        </div>
                    </div>
                    <h5>Already have an account?</h5>
                    <a href="<?php echo base_url(); ?>users/login">Sign In</a>
            </form>
        </div>
</body>

</html>