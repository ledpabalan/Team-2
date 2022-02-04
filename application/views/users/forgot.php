<?= isset($message) ? $message : ""; ?>
<head> 
Please type your Email address to reset your password
</head>
<body> 

<form action="forgotpassword" method="post">
<p> <input type="email" required name="user_email" placeholder="Email"> </p> 
<input type="submit" value="Reset Password"></input>
</form>
</body>