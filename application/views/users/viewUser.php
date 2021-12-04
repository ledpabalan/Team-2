<?=isset($message) ? $message : "";?>
<form method="POST" action="/Team-2/index.php/users/updateUser/"> 

                <input type="hidden" name="user_id" value ="<?php echo $user['user_id']?>">


                <p>Full Name:</p>
                <input type="text" name="" value ="<?php echo $user['user_name']?>">

                <p>Username:</p>
                <input type="text" name="" value ="<?php echo $user['user_username']?>">

                <p>Address:</p>
                <input type="text" name="" value ="<?php echo $user['user_address']?>">

                <p>Email:</p>
                <input type="text" name="" value ="<?php echo $user['user_email']?>">

                <p>Birthdate:</p>
                <input type="date" name="" value ="<?php echo $user['user_birthday']?>">

                <p>Contact Number:</p>
                <input type="text" name="" value ="<?php echo $user['user_contact_no']?>">

                <p>Password:</p>
                <input type="text" name="password" value ="<?php echo $user['user_password']?>">


                <p>Gender:</p>
                <input type="radio" id="Gender" name="Gender"value="<?php echo $user['user_gender']?>"/>Male
                <input type="radio" id="Gender" name="Gender"value="<?php echo $user['user_gender']?>"/>Female
                <input type="radio" id="Gender" name="Gender"value="<?php echo $user['user_gender']?>"/>Other

                <br>
                <br>
                <input type="submit" value="Update User">

</form>     

    <a href="/users">Back to list of user</a>