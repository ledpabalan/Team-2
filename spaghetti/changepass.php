<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'head.php'; ?>

</head>
<body>
<?php include 'header2.php'; ?>  

<!-- profile section starts  -->

    <div class="profile">   
            <h5>Settings</h5>
            <a href="settings.php">Edit Profile</a> <br>
            <a class="active"href="changepass.php">Change<br>Password</a><br>
            <a href="delprofile.php">Delete Profile</a> <br>

            <input type="submit" value="LOG OUT" class="lobtn">

        <div class="cpassbox">
            <h3>Change Password</h3>
            <h6>For your account's security, do not share your password with anyone else</h6>

            <h4>Current Password: <input type="text" name="password" placeholder=" Enter Current Password"></h4>
            
            <h4>New Password: <input type="text" name="password" placeholder=" Enter New Password"></h4>

            <h4>Confirm Password: <input type="text" name="confirmpassword" placeholder=" Confirm Password"></h4>
                
           
            <input type="submit" value="SAVE" class="svbtn">

        
        </div>

    </div>

<!-- profile section ends  -->

<?php include 'footer.php'; ?>  


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
