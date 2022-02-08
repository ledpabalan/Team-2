<?=isset($message) ? $message : "";?>
<!-- <?php $id = $this->session->userdata('user_id'); ?> -->           
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'assets/headsellerside.php'; ?>
</head>
<body>
    <?php include 'assets/header2sellerside.php'; ?>  

<!-- profile section starts  -->
    
    <div class="profile">   
            <h5>My Account</h5>
            <a class="active "href='<?php echo base_url()."userssellerside/viewUser"?>'>Seller Profile</a> <br>
            <a href='<?php echo base_url()."userssellerside/shopprofile"?>'>Shop Profile</a> <br>
            <a href='<?php echo base_url()."Userssellerside/edituser"?>'>Settings</a><br>

            <a class="lobtn" href= '<?php echo base_url()."/logout"?>'>LOG OUT</a>

        <div class="seller-profilebox">

            <h3>My Profile </h3> 

            <input type="hidden" name="user_id" value ="<?php echo $user['user_id']?>">

            <h4>Username:<span class="indent"><?php echo $user['user_username']?></span> </h4>
            
            <h4>Full Name: <span class="indent"><?php echo $user['user_name']?></span></h4>
            
            <h4>Address: <span class="indent1"><?php echo $user['user_address']?></span></h4>
    
            <h4>Birthdate: <span class="indent2"><?php echo $user['user_birthday']?></span></h4>
            
            <h4>Gender:<span class="indent3"><?php echo $user['user_gender']?></span></h4>
            <h4>Contact No: <span class="indent4"><?php echo $user['user_contact_no']?></h4>
            <img class="avatar"  src="<?php echo base_url(); ?>assets/images/profilepicture.svg">

            
        </div>  

    </div>
    </form>     


<!-- profile section ends  -->

<?php include 'assets/sellerfooter.php'; ?>  


<script src="<?php echo base_url(); ?>https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

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

