<?=isset($message) ? $message : "";?>
<form method="POST">


                <p>Username:</p>
                <input type="text" name="user_username" placeholder=" Enter Username">

                <p>Full Name:</p>
                <input type="text" name="user_name" placeholder=" Enter fullname">

                <p>Email:</p>
                <input type="text" name="user_email" placeholder=" Enter Email">

                <p>Address:</p>
                <input type="text" name="user_address" placeholder=" Enter Address">

                <p>Contact No:</p>
                <input type="text" name="user_contact.no" placeholder=" Enter Contact No.">

                <p>Age:</p>
                <input type="text" name="user_age" placeholder=" Enter Age">

                <p>Password:</p>
                <input type="password" name="user_password" placeholder=" Enter Password">


                <p> <input type="submit"  value="Create User"> </p>

</form> 
                <a href="/users">Back to list of user</a>

