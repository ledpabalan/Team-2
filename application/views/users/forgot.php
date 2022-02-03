<?= isset($message) ? $message : ""; ?>
<head> 
Please type your Email address to reset your password
</head>
<body> 

<form action="" method="post">
<p> <input type="text" name="user_email" placeholder="user_email" required> </p> 

<p> <input type="submit" value="Send Reset Link"> </p> 
</form>
</body>