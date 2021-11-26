<?=isset($message) ? $message : "";?>
<form method="POST">


                <p>Username:</p>
                <input type="text" name="username" placeholder=" Enter Username">

                <p>Password:</p>
                <input type="password" name="password" placeholder=" Enter Password">

                <p>Firstname Name:</p>
                <input type="text" name="firstname" placeholder=" Enter Firstname">

                <p>Lastname Name:</p>
                <input type="text" name="lastname" placeholder=" Enter Lastname">

                <input type="submit"  value="Create User">

</form> 
                <a href="/users">Back to list of user</a>

