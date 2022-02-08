<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The New Tayuman</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- ===== ICON ===== -->
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/icon.png">

    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
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
                    <!-- <input type="radio" id="Account-Type2" name="user_type" value="Seller"> -->
                    <label for="Account-Type1" class="Account-Type1">
                        <div class="dot"></div>
                        <div class="text">Customer</div>
                    </label>
                    <!-- <label for="Account-Type2" class="Account-Type2">
                        <div class="dot"></div>
                        <div class="text">Vendor</div>
                    </label> -->
                    <button type="submit" value="submit">Next</button>
                    <a href="#modal" class="modal-open">Terms of Services</a> &
                    <a href="#modal2" class="modal-open">Privacy Policy</a>

                    <div class="modal" id="modal">
                        <div class="modal__content">
                            <a href="#" class="modal__close">&times;</a>
                            <h2 class="modal__heading">TERMS OF SERVICES</h2><p>Welcome to the “The New Tayuman” platform. Please read the following Terms of Service carefully before using this Site or opening an account so that you are aware of your legal rights and obligations. The “Services” we provide or make available include (a) the Site, (b) the services provided by the Site and by “The New Tayuman” client software made through the Site, and (c) all information, linked pages, features, data, text, images, messages, or other materials mage available through the Site or its related services. Any new features added to or augmenting the Services are also subject to these Terms of Service. These Terms of Service govern your use of Services provided by the developers of “The New Tayuman”.
                            <br><br>
                            The Services include an online platform service that provides a place and an opportunity for the sale of goods between the buyer and the seller. The actual contract for sale is directly between the buyer and the seller and “The New Tayuman” is not a party to that or any other contract between buyer and seller and accepts no obligations in connection with any such contract. Parties to such transaction will be entirely responsible for the sales contract between them, the listing of goods, warranty of purchase and the like. “The New Tayuman” is not involved in the transaction between users. “The New Tayuman” reserves the right to remove any content or information provided by you on the site. “The New Tayuman” cannot ensure that users will actually complete a transaction.
                            <br><br>
                            Before becoming a user of the site, you must read and accept all of the terms and conditions in, and linked to, these Terms of Service you must consent to the processing of your personal data as described in the Privacy Policy linked hereto. 
                            <br><br>
                            “The New Tayuman” reserves the right to change, modify, suspend, or discontinue all or any part of this site or the Services at any time or upon notice as required by local laws. “The New Tayuman” may also impose limits on certain features or restrict your access to parts of, or the entire, site or services in its sole discretion and without notice or liability.
                            <br><br>
                            “The New Tayuman” reserves the right to refuse to provide you access to the Site or Services or to allow you to open an Account for any reason.
                            <br><br>
                            BY USING “THE NEW TAYUMAN” SERVICES OR OPENING AN ACCOUNT, YOU GIVE YOUR IRREVOCABLE ACCEPTANCE OF AND CONSENT TO THE TERMS OF THIS AGREEMENT, INCLUDING THOSE ADDITIONAL TERMS AND CONDITIONS AND POLICIES REFERENCED HEREIN AND/OR LINKED HERETO.
                            <br><br>
                            IF YOU DO NOT AGREE TO THESE TERMS, PLEASE DO NOT USE OUR SERVICES OR ACCESS THE SITE. IF YOU ARE UNDER THE AGE OF 18 OR THE LEGAL AGE FOR GIVING CONSENT HEREUNDER PURSUANT TO THE APPLICABLE LAWS IN YOUR COUNTRY (THE “LEGAL AGE”), YOU MUST GET PERMISSION FROM A PARENT OR LEGAL GUARDIAN TO OPEN AN ACCOUNT AND THAT PARENT OR LEGAL GUARDIAN MUST AGREE TO THE TERMS OF THIS AGREEMENT. IF YOU DO NOT KNOW WHETHER YOU HAVE REACHED THE LEGAL AGE, OR DO NOT UNDERSTAND THIS SECTION, PLEASE DO NOT CREATE AN ACCOUNT UNTIL YOU HAVE ASKED YOUR PARENT OR LEGAL GUARDIAN FOR HELP. IF YOU ARE THE PARENT OR LEGAL GUARDIAN OF A MINOR WHO IS CREATING AN ACCOUNT, YOU MUST ACCEPT THE TERMS OF THIS AGREEMENT ON THE MINOR'S BEHALF AND YOU WILL BE RESPONSIBLE FOR ALL USE OF THE ACCOUNT OR COMPANY SERVICES USING SUCH ACCOUNT, WHETHER SUCH ACCOUNT IS CURRENTLY OPEN OR CREATED LATER.
                            </p>
                        </div>
                    </div>

                    <div class="modal" id="modal2">
                        <div class="modal__content">
                            <a href="#" class="modal__close">&times;</a>
                            <h2 class="modal__heading">PRIVACY POLICY</h2><p>Welcome to the “The New Tayuman” platform. “The New Tayuman” takes its responsibilities under applicable privacy laws and regulations seriously and is committed to respecting the privacy rights and concerns of all users of our “The New Tayuman” website. Users refers to a user who registers for an account with us for the use of the services, including both buyers and sellers. We recognize the importance of the personal data you have entrusted to us and believe that it is our responsibility to properly manage, protect and process your personal data. The Privacy Policy is designed to assist you in understanding how we collect, use, disclose and/or process the personal data you have provided to us and/or we possess about you, whether now or in the future, as well as to assist you in making an informed decision before providing us with any of your personal data.
                            <br><br>
                            “Personal Data” means data, whether true or not, about an individual who can be identified from that data, or from that data and other information to which an organization has or is likely to have access. Common examples of personal data could include name, identification number and contact information.
                            <br><br>
                            By using the services, registering for an account with us, visiting our platform, or accessing the services, you acknowledge and agree that you accept the practices, requirements, and/or policies outlined in this Privacy Policy, and you hereby consent to us collecting, using, disclosing an/or processing your personal data as described herein. IF YOU DO NOT CONSENT TO THE PROCESSING OF YOUR PERSONAL DATA AS DESCRIBED IN THIS PRIVACY POLICY, PLEASE DO NOT USE OUR SERVICES OR ACCESS OUR PLATFORM. If we change our Privacy Policy, we will notify you including by posting those changes or the amended Privacy Policy on our platform. We reserve the right to amend this Privacy Policy at any time. To the fullest extent permissible under applicable law, your continued use of the services or platform, including placing of any orders, shall constitute your acknowledgment and acceptance of the changes made to this Privacy Policy.
                            <br><br>
                            This policy applies in conjunction with other notices, contractual clauses, consent clauses that apply in relation to the collection, storage, use, disclosure and/or processing of your personal data by us and is not intended to override those notices or clauses unless we state expressly otherwise.
                            </p>
                        </div>
                    </div>
                    <h5>Already have an account?</h5>
                    <a href="<?php echo base_url(); ?>users/login">Sign In</a>
            </form>
        </div>
</body>
</html>