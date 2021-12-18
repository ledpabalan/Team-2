<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'head.php'; ?>

</head>
<body>
<?php include 'header3.php'; ?>  

<!-- profile section starts  -->

    <div class="profile">   
            <h5>Settings</h5>
            <a href="seller-setting.php">Edit Profile</a> <br>
            <a href="seller-changepass.php">Change<br>Password</a><br>
            <a class="active" href="seller-deactivate.php">Delete Profile</a> <br>

            <input type="submit" value="LOG OUT" class="lobtn">

        <div class="deactbox">
            <h3>Deactivate Account?</h3>

            <h4>Confirm Password: <input type="text" name="confirmpassword" placeholder=" Confirm Password"></h4>
            <h4>Reasons for deactivating: <br> <textarea name="message" rows="10" placeholder="Your Reason for deactivating" required></textarea></h4>
            
            <input type="submit" value="DEACTIVATE" class="dbtn">

        
        </div>

    </div>

<!-- profile section ends  -->

<?php include 'seller-footer.php'; ?>  


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
