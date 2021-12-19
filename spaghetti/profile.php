<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'head.php'; ?>

</head>
<body>
    <?php include 'header2.php'; ?>  

<!-- profile section starts  -->

    <div class="profile">   
            <h5>My Account</h5>
            <a class="active "href="profile.php">Profile</a> <br>
            <a href="allpurchases.php">Purchases</a> <br>

            <input type="submit" value="LOG OUT" class="lobtn">

        <div class="profilebox">
            <h3>My Profile <a href="settings.php"><i class="fas fa-edit"></a></i></h3> 
            <h4>Username:________________________________</h4>
            
            <h4>Full Name:________________________________</h4>
            
            <h4>Address:_________________________________</h4>
    
            <h4>Birthdate: __/__/____ Age: _____</h4>
            
            <h4>Gender:_________ Contact No.:________________</h4>
            <img class="avatar" src="./images/profilepic.png">
            <h6>"LETS GO TAYUMAN"</h6>
            
        </div>

    </div>

<!-- profile section ends  -->

<?php include 'footer.php'; ?>  


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
