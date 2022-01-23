<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'assets/head.php'; ?>

</head>
<body>
<?php include 'assets/header2.php'; ?>  

<!-- delete profile section starts  -->

    <div class="profile">   
            <h5>Settings</h5>
            
            <a href="/Team-2/users/edituser">Edit Profile</a> <br>
            <a href="/Team-2/users/changepass">Change<br>Password</a><br>
            <a class="active" href="/Team-2/users/userdelprofile">Delete Profile</a> <br>

            <input type="submit" value="LOG OUT" class="lobtn">

        <div class="deactbox">
            <h3>Deactivate Account?</h3>

            <h4>Confirm Password: <input type="text" name="confirmpassword" placeholder=" Confirm Password"></h4>
            <h4>Reasons for deactivating: <br> <textarea name="message" rows="10" placeholder="Your Reason for deactivating" required></textarea></h4>
            
            <input type="submit" value="DEACTIVATE" class="dbtn">

        
        </div>

    </div>

<!-- delete profile section ends  -->

<?php include 'assets/footer.php'; ?>  


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
