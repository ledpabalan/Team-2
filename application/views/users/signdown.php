<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The New Tayuman</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="javascript" href="<?php echo base_url(); ?>assets/sds.js">
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/login.css">
    
    
         
</head>
<body>

    <!-- login start-->
    <div class="loginbox">
        <img class="logo" src="<?php echo base_url(); ?>assets/images/TNTlogo.png">
        <img class="avatar" src="<?php echo base_url(); ?>assets/images/login.png">
            <h1>SIGN UP FOR FREE!</h1>
            <form method= "POST">
                <p>Full Name:</p>
                <input type="text" name="user_name" placeholder=" Enter Fullname"required>

                <p>Username:</p>
                <input type="text" name="user_username" placeholder=" Enter Username"required>

                <p>Address:</p>
                <input type="text" name="user_address" placeholder=" Enter Address"required>

                <p>Email:</p>
                <input type="text" name="user_email" placeholder=" Enter Email"required>

                <p>Birthdate:</p>
                <input type="date" name="user_birthday" placeholder=" DD-MM-YYYY"required>

                <p>Contact Number:</p>
                <input type="text" name="user_contact_no" placeholder=" Enter Contact No."required>

                <p>Password:</p>
                <input type="text" name="user_password" placeholder=" Enter Password"required>

                <p>Confirm Password:</p>
                <input type="text" name="user_pwdRepeat" placeholder=" Confirm Password"required>

                <p>Gender:</p>
                <input type="checkbox" id="Gender" name="user_gender"value="Male"/>Male
                <input type="checkbox" id="Gender" name="user_gender"value="Female"/>Female
                <input type="checkbox" id="Gender" name="user_gender"value="Other"/>Other
        
                <input type="file" id="real-file" hidden="hidden" />
                <button type="button" id="custom-button">CHOOSE A FILE</button>
                <span id="custom-text">UPLOAD VERIFICATION</span>

                <script>
                    const realFileBtn = document.getElementById("real-file");
                    const customBtn = document.getElementById("custom-button");
                    const customTxt = document.getElementById("custom-text");

                    customBtn.addEventListener("click", function() {
                        realFileBtn.click();
                    });

                    realFileBtn.addEventListener("change", function() {
                        if (realFileBtn.value) {
                            customTxt.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
                        }else {
                            customTxt.innerHTML = "No file chosen, yet.";
                        }
                    });

                </script>
                <!-- <a href="<?php echo base_url(); ?>"type= "submit"><i class="fas fa-chevron-circle-right"></i></a> -->
                <button type="submit" value="submit" >submit</button>
                
                <h5>Already have an account?</h5>
                <a href="<?php echo base_url(); ?>users/login">Sign in</a>

            </form>
    </div>
    <!-- login end-->

</body>
</html>