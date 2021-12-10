<?=isset($message) ? $message : "";?>
<form method="POST" action="/Team-2/users/updateUser/"> 

                <input type="hidden" name="user_id" value ="<?php echo $user['user_id']?>">


                <p>Full Name:</p>
                <input type="text" name="user_name" value ="<?php echo $user['user_name']?>">

                <p>Username:</p>
                <input type="text" name="user_username" value ="<?php echo $user['user_username']?>">

                <p>Address:</p>
                <input type="text" name="user_address" value ="<?php echo $user['user_address']?>">

                <p>Email:</p>
                <input type="text" name="user_email" value ="<?php echo $user['user_email']?>">

                <p>Birthdate:</p>
                <input type="date" name="user_birthday" value ="<?php echo $user['user_birthday']?>">

                <p>Contact Number:</p>
                <input type="text" name="user_contact_no" value ="<?php echo $user['user_contact_no']?>">

                <p>Password:</p>
                <input type="text" name="user_password" value ="<?php echo $user['user_password']?>">

                <p>Confirm Password: </p>
                <input type="text" name="user_pwdRepeat" value ="<?php echo $user['user_pwdRepeat']?>">

                <br>
                <br>
                <input type="submit" value="Update User">

</form>     

    <a href="/users">Back to list of user</a>