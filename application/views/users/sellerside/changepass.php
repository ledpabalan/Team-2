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
            <a class="active"href='<?php echo base_url()."Userssellerside/changepassword"?>'>Change<br>Password</a><br>
            <a href='<?php echo base_url()."Userssellerside/userdelprofile"?>'>Delete Profile</a> <br>

            <a class="lobtn" href= '<?php echo base_url()."/logout"?>'>LOG OUT</a>

    <!-- <div class="profile">   
            <h5>My Account</h5>
        <div class="profilebox">
            <h3>Change Password <a href="settings.php"><i class="fas fa-edit"></a></i></h3>  -->

        <div class="cpassbox">
        <form method="POST">   
            <h3>Change Password</h3>
            <h6>For your account's security, do not share your password with anyone else</h6>

            <input type="hidden" name="user_id" value ="<?php echo $user['user_id']?>">

            <h4>Password: <input type="text1" name="user_password" value ="" required></h4>
            <h4>Confirm Password: <input type="text" name="user_pwdRepeat" value ="" required></h4>

            <!-- <p> <input type="submit" value="Update User" onclick="alert('Are you sure you want to change your password?')"> </p>
        -->

        <input class="pbtn" type="submit" value="Change Password">
        </div>

    </div>

<!-- profile section ends  -->

<?php include 'assets/sellerfooter.php'; ?>




<!-- custom js file link  -->
<script src="<?php echo base_url(); ?>assets/script.js"></script>
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

</body>
</html>

</form>     
    