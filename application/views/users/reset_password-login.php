<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Reset Password</h1>
        </div>
        <div class="info">
            <?php if(isset($error)){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error ?>
                </div>
            <?php } ?>
            <form method="POST"> 
                Password:
                <input type="password" name="user_password" required>
                Repeat Password:     
                <input type="password" name="user_pwdRepeat" required>  
            </form>
        </div>
        <div class="buttons">
                    <button type="submit">Submit</button>
                </div> 
    </div>
</body>
</html>