<?=isset($message) ? $message : "";?>
<!-- <?php $id = $this->session->userdata('user_id'); ?> -->

<<<<<<< HEAD
<form method="POST" >               
 <!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

<!-- profile section starts  -->

    <div class="profile">   
            <h5>My Account</h5>
        <div class="profilebox">
            <h3>Change Password <a href="settings.php"><i class="fas fa-edit"></a></i></h3> 

            <input type="hidden" name="user_id" value ="<?php echo $user['user_id']?>">
=======
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
            <a href="delprofile">Delete Profile</a> <br>

            <input type="submit" value="LOG OUT" class="lobtn">

        <div class="cpassbox">
            <h3>Change Password</h3>
            <h6>For your account's security, do not share your password with anyone else</h6>
>>>>>>> develop

            <h4>Password: <input type="text" name="user_password" value ="" required></h4>
            <h4>Confirm Password: <input type="text" name="user_pwdRepeat" value ="" required></h4>

<<<<<<< HEAD
            <!-- <img class="avatar" src="./images/profilepic.png"> -->

            <p> <input type="submit" value="Update User" onclick="alert('Are you sure you want to change your password?')"> </p>
            <!-- <a class="active "href="profile.php">Profile</a> <br>
            <a href="allpurchases.php">Purchases</a> <br> -->

            <h6>"LETS GO TAYUMAN"</h6>
            
=======
            <p> <input type="submit" value="Update User" onclick="alert('Are you sure you want to change your password?')"> </p>
>>>>>>> develop
        </div>

    </div>

<<<<<<< HEAD
<!-- profile section ends  -->

<!-- <?php include 'footer.php'; ?>  


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>

</form>     
    <a href="/Team-2/users/viewuser">Back to the View Profile</a> </br>  </br> 
    <a href="/Team-2/Homepage">Back to the Homepage</a>
=======
<!-- change password section ends  -->

<?php include 'assets/footer.php'; ?>  


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="assets/script.js"></script>

</body>
</html>
>>>>>>> develop
