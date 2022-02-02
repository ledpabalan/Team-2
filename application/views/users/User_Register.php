<?=isset($message) ? $message : "";?>
<form method='POST'>

                <p>Full Name:</p>
                <input type="text" name="" placeholder=" Enter Fullname">

                <p>Username:</p>
                <input type="text" name="" placeholder=" Enter Username">

                <p>Address:</p>
                <input type="text" name="" placeholder=" Enter Address">

                <p>Email:</p>
                <input type="text" name="" placeholder=" Enter Email">

                <p>Birthdate:</p>
                <input type="date" name="" placeholder=" DD-MM-YYYY">

                <p>Contact Number:</p>
                <input type="text" name="" placeholder=" Enter Contact No.">

                <p>Password:</p>
                <input type="text" name="password" placeholder=" Enter Password">

                <p>Confirm Password:</p>
                <input type="text" name="confirmpassword" placeholder=" Confirm Password">

                <p>Gender:</p>
                <input type="radio" id="Gender" name="Gender"value="Male"/>Male
                <input type="radio" id="Gender" name="Gender"value="Female"/>Female
                <input type="radio" id="Gender" name="Gender"value="Other"/>Other

</form> 
                <h5>Already have an account?</h5>
                <a href="application/login.html">Sign in</a>

