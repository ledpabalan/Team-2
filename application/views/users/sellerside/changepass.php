<?=isset($message) ? $message : "";?>
<!-- <?php $id = $this->session->userdata('user_id'); ?> -->    
<!DOCTYPE html>
<html lang="en">
<head>

<?php include 'assets/headsellerside.php'; ?>



</head>
<body>
<?php include 'assets/header2sellerside.php'; ?>  
<?=isset($message) ? $message : "";?>
<!-- <?php $id = $this->session->userdata('user_id'); ?> -->


<!-- change password section starts  -->

    <div class="profile">   
            <h5>Settings</h5>
            <a href='<?php echo base_url()."Userssellerside/edituser"?>'>Edit Profile </a> <br>
            <a href='<?php echo base_url()."Userssellerside/changepassword"?>'>Change<br>Password</a><br>
            <a class="active"href='<?php echo base_url()."Userssellerside/userdelprofile"?>'>Delete Profile</a> <br>

    <div class="profile">   
            <h5>My Account</h5>
        <div class="profilebox">
            <h3>Change Password <a href="settings.php"><i class="fas fa-edit"></a></i></h3> 

        <div class="cpassbox">
        <form method="POST">   
            <h3>Change Password</h3>
            <h6>For your account's security, do not share your password with anyone else</h6>

            <input type="hidden" name="user_id" value ="<?php echo $user['user_id']?>">

            <h4>Password: <input type="text1" name="user_password" value ="" required></h4>
            <h4>Confirm Password: <input type="text" name="user_pwdRepeat" value ="" required></h4>

            <!-- <p> <input type="submit" value="Update User" onclick="alert('Are you sure you want to change your password?')"> </p>
        -->

        <input type="submit" value="Change Password">
        </div>

    </div>

<!-- profile section ends  -->

<?php include 'assets/footer.php'; ?>


<script src="<?php echo base_url(); ?>https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="<?php echo base_url(); ?>assets/script.js"></script>

</body>
</html>

</form>     
    <a href="/Team-2/users/viewuser">Back to the View Profile</a> </br>  </br> 
    <a href="/Team-2/Homepage">Back to the Homepage</a>
