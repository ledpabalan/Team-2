
<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'head.php'; ?>

</head>
<body>
<?php include 'header2.php'; ?>  
<?=isset($message) ? $message : "";?>
<!-- <?php $id = $this->session->userdata('user_id'); ?> -->

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

            <h4>Password: <input type="text2" name="user_password" value ="" required></h4>
            <h4>Confirm Password: <input type="text" name="user_pwdRepeat" value ="" required></h4>

            <!-- <img class="avatar" src="./images/profilepic.png"> -->

            <p> <input type="submit" class="svbtn" value="Update User" onclick="alert('Are you sure you want to change your password?')"> </p>
            <!-- <a class="active "href="profile.php">Profile</a> <br>
            <a href="allpurchases.php">Purchases</a> <br> -->
            
        </div>

    </div>

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
