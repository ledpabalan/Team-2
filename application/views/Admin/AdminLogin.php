<?= isset($message) ? $message : ""; ?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The New Tayuman</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login.css">
</head>

<body>
    <div class="loginbox">
        <img class="wave" src="<?php echo base_url(); ?>assets/images/loginbg.png">
        <div class="img">
            <img src="<?php echo base_url(); ?>assets/images/loginpic.png">
        </div>
        <div class="login-content">
            <form method="POST">
                <h2 class="login-title">Admin Login</h2>
                <div class="login-input username">
                    <div class="login-icons">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                </div>
                <div class="login-input password">
                    <div class="login-icons">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>