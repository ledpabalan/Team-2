<?=isset($message) ? $message : "";?>

<form method='POST'>

                <p>Full Name:</p>
                <input type="text" name="user_name" placeholder=" Enter Fullname">

                <p>Email:</p>
                <input type="text" name="user_email" placeholder=" Enter Email">

                <p>Address:</p>
                <input type="text" name="user_address" placeholder=" Enter Address">

                <p>Contact Number:</p>
                <input type="text" name="user_contact_no" placeholder=" Enter Contact No.">

                <p>Birthdate:</p>
                <input type="date" name="user_birthday" placeholder=" DD-MM-YYYY">
                
                <p>Gender:</p>
                <input type="radio" id="Gender" name="user_gender" value="Male"/>Male
                <input type="radio" id="Gender" name="user_gender" value="Female"/>Female
                <input type="radio" id="Gender" name="user_gender"value="Other"/>Other

                <p>Age:</p>
                <input type="text" name="user_age" placeholder="Age ">

                <p>Username:</p>
                <input type="text" name="user_username" placeholder=" Enter Username">

                <p>Password:</p>
                <input type="text" name="user_password" placeholder=" Enter Password">

                <!-- <p>Confirm Password:</p>
                <input type="text" name="confirmpassword" placeholder=" Confirm Password">
-->
                <br>
                <br>
                <input type="submit" value="Create User">
</form> 
               <!-- <h5>Already have an account?</h5> -->
               <!-- <a href="application/login.html">Sign in</a> -->

               </div>
    <!-- login end-->

</body>
</html>
