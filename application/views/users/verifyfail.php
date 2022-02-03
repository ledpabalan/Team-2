<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" type="text/css"
      href="<?php echo base_url(); ?>assets/stylengverify.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Verification Failed</h1>
        </div>
        <div class="info">
            <?php if(isset($error)){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error ?>
                </div>
            <?php } ?>
            <p>Email Verification Failed</p>
            <p>Code expired/Code Already Used</p>
            <div class="buttons">
            <a href='<?php echo base_url()."users/signup"?>' class="btn">Signup</a>
            </div>
        </div>
    </div>
</body>
</html>