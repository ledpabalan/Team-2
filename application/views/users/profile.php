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

<!-- profile section starts  -->
    
    <div class="profile">   
            <h5>My Account</h5>

            <a class="active "href='<?php echo base_url()."users/viewUser"?>'>Profile</a> <br>
            <a href="allpurchases.php">Purchases</a> <br>

            <a class="lobtn" href= '<?php echo base_url()."/logout"?>'>Logout</a>

        <div class="profilebox">
            <h3>My Profile <a href="/Team-2/users/edituser"><i class="fas fa-edit"></a></i></h3> 

            <input type="hidden" name="user_id" value ="<?php echo $user['user_id']?>">

            <h4>Username: <?php echo $user['user_username']?> </h4>
            
            <h4>Full Name: <?php echo $user['user_name']?></h4>
            
            <h4>Address: <?php echo $user['user_address']?></h4>
    
            <h4>Birthdate: <?php echo $user['user_birthday']?></h4>
            
            <h4>Gender:<?php echo $user['user_gender']?></h4>
            <h4>Contact No.: <?php echo $user['user_contact_no']?></h4>

            
        </div>

    </div>
    </form>     

        <a href="/Team-2/Homepage">Back to the Homepage</a>

<!-- profile section ends  -->

<!-- <?php include 'assets/footer.php'; ?>  


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->

<!-- custom js file link  -->
<script src="assets/script.js"></script>

</body>
</html>

<<<<<<< HEAD
</form>     

    <a href="/Team-2/users/edituser">Edit Profile</a> </br> </br> 
    <a href="/Team-2/users/changepassword">Change Password</a> </br> </br> 
    <a href="/Team-2/Homepage">Back to the Homepage</a>
=======
>>>>>>> develop