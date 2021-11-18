<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'head.php'; ?>

</head>
<body>
    
    <?php include 'header2.php'; ?>
<!-- profile section starts  -->


    <div class="profile">
        <nav class="profile- nav">
            <h5>My Account</h5>
            <a class="active" href="homepage.html">Profile</a> <br>
            <a href="purchases.html">Purchases</a> <br>
            <a href="changepass.html">Change<br>Password</a>

            <input type="submit" value="LOG OUT" class="lobtn">
        </nav>

        <div class="profilebox">
            <h3>My Profile</h3>

            <h4>Username:  ____________________________________</h4>
            
            <h4>Full Name: ____________________________________</h4>
            
            <h4>Address:   ____________________________________</h4>
            
            <h4>Birthdate: __/__/____     Age: _____</h4>
            
            <h4>Gender: _________  Contact No.: _______________</h4>
           
            <img class="avatar" src="./images/profilepic.png">
            <h6>"LETS GO TAYUMAN"</h6>
            
            <input type="submit" value="SAVE" class="btn">

            <input type="submit" value="DEACTIVATE" class="btn">
        </div>

    </div>

<!-- profile section ends  -->


    <?php include 'footer.php'; ?>  


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>