<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'assets/headbuyerside.php'; ?>

</head>
<body>
<?php include 'assets/header2buyerside.php'; ?>  

<!-- delete profile section starts  -->

    <div class="profile">   
            <h5>Settings</h5>
            
            <a href='<?php echo base_url()."Usersbuyerside/edituser"?>'>Edit Profile </a> <br>
            <a href='<?php echo base_url()."Usersbuyerside/changepassword"?>'>Change<br>Password</a><br>
            <a class="active"href='<?php echo base_url()."Usersbuyerside/userdelprofile"?>'>Delete Profile</a> <br>

            <a class="lobtn" href= '<?php echo base_url()."/logout"?>'>LOG OUT</a>

        <div class="deactbox">
        <form method="POST" action="/Team-2/Usersbuyerside/updatestatus" >  
            <h3>Deactivate Account?</h3>
            <h4>Reasons for deactivating: <br> <textarea name="message" rows="10" placeholder="Your Reason for deactivating" required></textarea></h4>
           

                
            <input type="submit" value="DEACTIVATE" class="dbtn" >
        </div>

    </div>

<!-- delete profile section ends  -->

<?php include 'assets/footer.php'; ?>  



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

<!-- custom js file link  -->
<script src="<?php echo base_url(); ?>assets/script.js"></script>

</body>
</html>
