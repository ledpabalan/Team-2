<?=isset($message) ? $message : "";?>
<!-- <?php $id = $this->session->userdata('user_id'); ?> -->

<form method="POST">       
<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'assets/head.php'; ?>

</head>
<body>
<?php include 'assets/header2.php'; ?>  

<!-- change password section starts  -->

    <div class="profile">   
            <h5>Settings</h5>
            <a href="/Team-2/users/edituser">Edit Profile</a> <br>
            <a class="active" href="/Team-2/users/changepass">Change<br>Password</a><br>
            <a href="/Team-2/users/userdelprofile">Delete Profile</a> <br>

            <input type="submit" value="LOG OUT" class="lobtn">

        <div class="cpassbox">
            <h3>Change Password</h3>
            <h6>For your account's security, do not share your password with anyone else</h6>

            <h4>Password: <input type="text" name="user_password" value ="" required></h4>
            <h4>Confirm Password: <input type="text" name="user_pwdRepeat" value ="" required></h4>

            <p> <input type="submit" value="Update User" onclick="alert('Are you sure you want to change your password?')"> </p>
        </div>

    </div>

<!-- change password section ends  -->

<?php include 'assets/footer.php'; ?>  


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="assets/script.js"></script>

</body>
</html>
