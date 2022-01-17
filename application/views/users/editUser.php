<?=isset($message) ? $message : "";?>
<!-- <?php $id = $this->session->userdata('user_id'); ?> -->

          
 <!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'assets/head.php'; ?>

</head>
<body>
<?php include 'assets/header2.php'; ?>  
<!-- profile section starts  -->

    <div class="profile">   
            <h5>My Account</h5>
            
            <a class="active" href="/Team-2/users/edituser">Edit Profile</a> <br>
            <a href="/Team-2/users/changepass">Change<br>Password</a><br>
            <a href="/Team-2/users/userdelprofile">Delete Profile</a> <br>

            <a class="lobtn" href= '<?php echo base_url()."/logout"?>'>LOG OUT</a>

        <div class="profilebox">
        <form method= "POST">
            <h3>My Profile <a href="/Team-2/users/viewUser"><i class="fas fa-edit"></a></i></h3> 

            <input type="hidden" name="user_id" value ="<?php echo $user['user_id']?>">

            <h4>Username: <input type="textedit" name="user_username" value ="<?php echo $user['user_username']?>"required > </h4>
            
            <h4>Full Name:  <input type="textedit" name="user_name" value ="<?php echo $user['user_name']?>"required ></h4>
            
            <h4>Address:  <input type="textedit1" name="user_address" value ="<?php echo $user['user_address']?>" required ></h4>
    
            <h4>Birthdate:  <input type="date" name="user_birthday" value ="<?php echo $user['user_birthday']?>" required ></h4>
            
            <h4>Gender:<input type="textedit2" name="user_gender" value ="<?php echo $user['user_gender']?>" required></h4>
            <h4>Contact No: <input type="textedit3" name="user_contact_no" value ="<?php echo $user['user_contact_no']?>" required></h4>


            <!-- <img class="avatar" src="./images/profilepic.png"> -->

           
            
            <input type="submit" value="Update Profile">
            <!-- <a class="active "href="profile.php">Profile</a> <br>
            <a href="allpurchases.php">Purchases</a> <br> -->

           

            <h6>"LETS GO TAYUMAN"</h6>
            
        </div>

    </div>

<!-- profile section ends  -->

<!-- <?php include 'footer.php'; ?>  


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->

<!-- custom js file link  -->
<script src="<?php echo base_url(); ?>assets/script.js"></script>

</body>
</html>

</form>     