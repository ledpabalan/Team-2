<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'head.php'; ?>

</head>
<body>
<?php include 'header2.php'; ?>  

<!-- profile section starts  -->

    <div class="profile">   
            <h5>Settings</h5>
            <a class="active" href="settings.php">Edit Profile</a> <br>
            <a href="changepass.php">Change<br>Password</a><br>
            <a href="delprofile.php">Delete Profile</a> <br>
            <input type="submit" value="LOG OUT" class="lobtn">

        <div class="editprofilebox">
            <h3>Edit Profile</h3> 

            <h4>Username: <input type="text" name="Username" placeholder=" Username"></h4>
            
            <h4>Full Name: <input type="text" name="Fullname" placeholder=" First Name Middle Name Last Name"></h4>

            <h4>Address: <input type="text" name="Address" placeholder=" Lot No. Street City Province"></h4>
            
            <h4>Birthdate: <input type="text1" name="Birthdate" placeholder=" MM/DD/YYYY"> Age: <input type="text1" name="Age" placeholder=" Age"> </h4>

            <h4>Gender: <input type="text1" name="Gender" placeholder=" Gender">Contact No.:<input type="text1" name="Contact Number" placeholder=" Contact Number"></h4>
           
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
