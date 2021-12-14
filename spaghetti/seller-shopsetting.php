<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'head.php'; ?>

</head>
<body>
<?php include 'header3.php'; ?>  

<!-- shop profile section starts  -->

    <div class="profile">   
            <h5>My Account</h5>
            <a class="active" href="seller-setting.php">Edit Profile</a> <br>
            <a href="seller-changepass.php">Change<br>Password</a><br>
            <a href="seller-deactivate.php">Delete Profile</a> <br>

            <input type="submit" value="LOG OUT" class="lobtn">

        <div class="shop-profilebox">
            <div class="section">            
            <a href="seller-setting.php">Profile</a> 
            <a class="active" href="seller-shopsetting.php">Shop</a>
            </div>

            <div class="image-avatar">
                <img class="avatar" src="./images/profilepic.png">
            </div>
            <div class="background-content">
                <img class="background-avatar" src="./images/shop cover.jpg">
            </div>
            
            <h1>SHOP NAME : SHOP'S NAME</h1>
            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel
            <h3>Open Hours: 7:00 - 17:00</h3><h2>Email : Shopname@gmail.com</h2>
            <h3>Contact us: 09999999999</h3></h4>
            
            <input type="submit" value="SAVE" class="lobtn">
        </div>

    </div>

<!-- shop profile section ends  -->

<?php include 'seller-footer.php'; ?>  


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
