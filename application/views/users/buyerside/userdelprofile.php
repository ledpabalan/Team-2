<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'assets/headbuyerside.php'; ?>

</head>
<body>
<?php include 'assets/header2buyerside.php'; ?>  

<!-- delete profile section starts  -->

    <div class="profile">   
            <h5>Settings</h5>
            
            <a href='<?php echo base_url()."Usersbuyerside/edituser"?>'>Edit Profile </a> <br>
            <a href='<?php echo base_url()."Usersbuyerside/changepassword"?>'>Change<br>Password</a><br>
            <a class="active"href='<?php echo base_url()."Usersbuyerside/userdelprofile"?>'>Delete Profile</a> <br>

            <a class="lobtn" href= '<?php echo base_url()."/logout"?>'>LOG OUT</a>

        <div class="deactbox">
            <h3>Deactivate Account?</h3>

            <h4>Confirm Password: <input type="text" name="confirmpassword" placeholder=" Confirm Password"></h4>
            <h4>Reasons for deactivating: <br> <textarea name="message" rows="10" placeholder="Your Reason for deactivating" required></textarea></h4>
            
            <input type="submit" value="DEACTIVATE" class="dbtn">

        
        </div>

    </div>

<!-- delete profile section ends  -->

<?php include 'assets/footer.php'; ?>  


<script src="<?php echo base_url(); ?>https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="<?php echo base_url(); ?>assets/script.js"></script>

</body>
</html>
