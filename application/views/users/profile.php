<?=isset($message) ? $message : "";?>
<!-- <?php $id = $this->session->userdata('user_id'); ?> -->
<form method="POST" action="/Team-2/users/updateUser">                
 <!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

<!-- profile section starts  -->

    <div class="profile">   
            <h5>My Account</h5>
        <div class="profilebox">
            <h3>My Profile <a href="settings.php"><i class="fas fa-edit"></a></i></h3> 
            <h4>Username: <input type="text" name="user_username" value ="<?php echo $user['user_username']?>"></h4>
            
            <h4>Full Name: <input type="text" name="user_name" value ="<?php echo $user['user_name']?>"></h4>
            
            <h4>Address:  <input type="text" name="user_address" value ="<?php echo $user['user_address']?>"></h4>
    
            <h4>Birthdate:  <input type="date" name="user_birthday" value ="<?php echo $user['user_birthday']?>"> </h4>
            
            <h4>Gender:  <input type="text" name="user_gender" value ="<?php echo $user['user_gender']?>"> </h4>
            <h4>Contact No.: <input type="text" name="user_contact_no" value ="<?php echo $user['user_contact_no']?>"></h4>

            <h4>Password: <input type="text" name="user_password" value ="<?php echo $user['user_password']?>"></h4>
            <h4>Confirm Password: <input type="text" name="user_pwdRepeat" value ="<?php echo $user['user_pwdRepeat']?>"></h4>

            <!-- <img class="avatar" src="./images/profilepic.png"> -->

            <input type="submit" value="Update User"> <br>
            <a class="active "href="profile.php">Profile</a> <br>
            <a href="allpurchases.php">Purchases</a> <br>

            <input type="submit" value="LOG OUT" class="lobtn"> <br>

            <h6>"LETS GO TAYUMAN"</h6>
            
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

    <a href="/users">Back to list of user</a>