
<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< Updated upstream

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
            <h3>My Profile <a href="settings.php"><i class="fas fa-edit"></a></i></h3> 

            <input type="hidden" name="user_id" value ="<?php echo $user['user_id']?>">

            <h4>Username: <?php echo $user['user_username']?> </h4>
            
            <h4>Full Name: <?php echo $user['user_name']?></h4>
            
            <h4>Address: <?php echo $user['user_address']?></h4>
    
            <h4>Birthdate: <?php echo $user['user_birthday']?></h4>
            
            <h4>Gender:<?php echo $user['user_gender']?></h4>
            <h4>Contact No.: <?php echo $user['user_contact_no']?></h4>

   
=======
    <?php include 'assets/head.php'; ?>
</head>
<body>
    <?php include 'assets/header2.php'; ?>  

<!-- profile section starts  -->
    
    <div class="profile">   
            <h5>My Account</h5>
            <a class="active "href='<?php echo base_url()."users/viewUser"?>'>Profile</a> <br>
            <a href='<?php echo base_url()."users/allpurchases"?>'>Purchases</a> <br>
            <a href='<?php echo base_url()."users/edituser"?>'>Settings</a><br>

            <a class="lobtn" href= '<?php echo base_url()."/logout"?>'>LOG OUT</a>

        <div class="profilebox">
            
            <h3>My Profile </h3> 

            <input type="hidden" name="user_id" value ="<?php echo $user['user_id']?>">

            <h4>Username:<span class="indent"><?php echo $user['user_username']?></span> </h4>
            
            <h4>Full Name: <span class="indent"><?php echo $user['user_name']?></span></h4>
            
            <h4>Address: <span class="indent1"><?php echo $user['user_address']?></span></h4>
    
            <h4>Birthdate: <span class="indent2"><?php echo $user['user_birthday']?></span></h4>
            
            <h4>Gender:<span class="indent3"><?php echo $user['user_gender']?></span></h4>
            <h4>Contact No: <span class="indent4"><?php echo $user['user_contact_no']?></h4>
            <img class="avatar"  src="<?php echo base_url(); ?>assets/images/profilepic.jpg">

>>>>>>> Stashed changes
            
        </div>

    </div>
<<<<<<< Updated upstream

<!-- profile section ends  -->

<!-- <?php include 'footer.php'; ?>  


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->
=======
    </form>     


<!-- profile section ends  -->

<?php include 'assets/footer.php'; ?>  


<script src="<?php echo base_url(); ?>https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
>>>>>>> Stashed changes

<!-- custom js file link  -->
<<<<<<< Updated upstream
<script src="script.js"></script>
=======
<script src="<?php echo base_url(); ?>assets/script.js"></script>
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
<script>
    /*script for nav bar */
    let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

let shoppingCart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () =>{
    shoppingCart.classList.toggle('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

</script>
>>>>>>> Stashed changes

</body>
</html>

</form>     

    <a href="/Team-2/users/edituser">Edit Profile</a> </br> </br> 
    <a href="/Team-2/users/changepassword">Change Password</a> </br>
    <a href="/Team-2/Homepage">Back to the Homepage</a>
