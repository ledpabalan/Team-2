<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'headlog.php'; ?>

</head>
<body>

<!-- upsign start-->
<div class="upsignbox">
        <img class="logo" src="./images/TNTlogo.png">
        <hr>
        <img class="avatar" src="./images/login.png">
            <h1>SIGN UP FOR FREE!</h1>
            
            <form>
                <p>Full Name:</p>
                <input type="text" name="" placeholder=" Enter Fullname">

                <p>Username:</p>
                <input type="text" name="" placeholder=" Enter Username">

                <p>Address:</p>
                <input type="text" name="" placeholder=" Enter Address">

                <p>Email:</p>
                <input type="text" name="" placeholder=" Enter Email">

                <p>Birthdate:</p>
                <input type="date" name="" placeholder=" DD-MM-YYYY">

                <p>Contact Number:</p>
                <input type="text" name="" placeholder=" Enter Contact No.">

                <p>Password:</p>
                <input type="text" name="password" placeholder=" Enter Password">

                <p>Confirm Password:</p>
                <input type="text" name="confirmpassword" placeholder=" Confirm Password">

                <p>Gender:</p>
                <input type="checkbox" id="Gender" name="Gender"value="Male"/>Male
                <input type="checkbox" id="Gender" name="Gender"value="Female"/>Female
                <input type="checkbox" id="Gender" name="Gender"value="Other"/>Other
        
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
                <a href="homesec.php"><i class="fas fa-chevron-circle-right"></i></a>
                
                <h5>Already have an account?</h5>
                <a id="SignUp" href="login.php">Sign in</a>

            </form>
    </div>
    <!-- upsign end-->


</body>
</html>