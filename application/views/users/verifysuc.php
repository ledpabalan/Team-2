<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The New Tayuman</title>

    <!-- ===== ICON ===== -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/icon.png">

    <!-- ===== FONTS ===== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/verify.css">
</head>

<body>
    <div class="verifybox">
        <img class="wave" src="<?php echo base_url(); ?>assets/images/loginbg.png">
        <div class="img">
            <img src="<?php echo base_url(); ?>assets/images/loginpic.png">
        </div>

        <div class="verify-content">
            <h1>Verification Success</h1>
            <?php if (isset($error)) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error ?>
                </div>
            <?php } ?>
            <h3>Email Verified</h3>
            <div class="buttons">
                <a href='<?php echo base_url() . "users/login" ?>' class="btn">Login</a>

            </div>
        </div>
    </div>
</body>

</html>