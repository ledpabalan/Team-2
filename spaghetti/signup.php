<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'headlog.php'; ?>

</head>
<body>

    <!-- signup start-->
    <div class="signupbox">
        <img class="logo" src="./images/TNTlogo.png">
        <img class="avatar" src="./images/login.png">
            <h1>ACCOUNT TYPE:</h1>
            <form>

                <input type="radio" id="Account Type" name="Account Type"value="Customer"/>Customer
                
                <input type="radio" id="Account Type" name="Account Type"value="Vendor"/>Vendor

                <a href="upsign.php"><i class="fas fa-chevron-circle-right"></i></a>
               
                <h5>Already have an account?</h5>
                <a href="login.php">Sign in</a>

            </form>
    </div>
    <!-- signup end-->


</body>
</html>