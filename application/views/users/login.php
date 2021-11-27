<?=isset($message) ? $message : "";?>
<form method="POST">


                <p>Username:</p>
                <input type="text" name="user_username" placeholder=" Enter Username">

                <p>Password:</p>
                <input type="password" name="user_password" placeholder=" Enter Password">

                <p> <input type="submit"  value="Login"> </p>

</form>

                <a href="/users">Back to list of user</a>