<?=isset($message) ? $message : "";?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The New Tayuman</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/login.css">
</head>
<body>

    <!-- login start-->
    <div class="loginbox">
        <img class="logo" src="<?php echo base_url(); ?>assets/images/tntlogo.png">
        <img class="avatar" src="<?php echo base_url(); ?>assets/images/login.png">
            <h1>LOG IN</h1>
            <form method= "POST">
                <input type="text" name="user_username" placeholder=" Username/Email"required>

                <input type="text" name="user_password" placeholder=" Password"required>
                <button type="submit">Submit</button>
                
                <h5>Don't have any account?</h5>
                <a href="<?php echo base_url(); ?>users/register">Sign up</a>

            </form>
    </div>
    <!-- login end-->

                <a href="/Team-2/index.php/users/admin">Back to list of user</a>