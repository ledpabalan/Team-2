<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'head.php'; ?>

</head>
<body>
<?php include 'header3.php'; ?>  

<!-- profile section starts  -->

    <div class="profile">   
            <h5>My Account</h5>
            <a href="seller-profile.php">Profile</a> <br>
            <a class="active " href="seller-items.php">Items</a> <br>
            <a href="seller-penorder.php">Orders</a> <br>

            <input type="submit" value="LOG OUT" class="lobtn">

        <div class="seller-itembox">
            <p>---Image------------------------------------Description--------------------------------------Details--</p>

        <section class="items-items" id="items-items">

            <div class="box-container">

                 <div class="box">
                     <h2>1.</h2>
                     <img src="./images/cheesebread.jpg" alt="">
                     <h3>Name: Cheese Bread</h3>
                     <h3>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h3>
                     <h3>Price: P15:00</h3>
                     <h3>Status: Available</h3>

                     <a href="#pop-item" class="ibtn">EDIT</a>
                     <input type="delete" value="DELETE" class="ibtn">
                 </div><br>

                 <div class="box">
                     <h2>2.</h2>
                     <img src="./images/cheesebread.jpg" alt="">
                     <h3>Name: Cheese Bread</h3>
                     <h3>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h3>
                     <h3>Price: P15:00</h3>
                     <h3>Status: Available</h3>

                     <a href="#pop-item" class="ibtn">EDIT</a>
                     <input type="delete" value="DELETE" class="ibtn">
                 </div><br>

                 <div class="box">
                     <h2>3.</h2>
                     <img src="./images/cheesebread.jpg" alt="">
                     <h3>Name: Cheese Bread</h3>
                     <h3>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h3>
                     <h3>Price: P15:00</h3>
                     <h3>Status: Available</h3>

                     <a href="#pop-item" class="ibtn">EDIT</a>
                     <input type="delete" value="DELETE" class="ibtn">
                 </div><br>

                 <div class="box">
                     <h2>4.</h2>
                     <img src="./images/cheesebread.jpg" alt="">
                     <h3>Name: Cheese Bread</h3>
                     <h3>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h3>
                     <h3>Price: P15:00</h3>
                     <h3>Status: Available</h3>
                    
                     <a href="#pop-item" class="ibtn">EDIT</a>
                     <input type="delete" value="DELETE" class="ibtn">
                 </div><br>
        </section>
            
        </div>

    </div>

    <div id="pop-item" class="item-edit">
        <div class="popup-edit">
            <a class="close" href="#">&times;</a>
            <div class="content">
                <img src="./images/foodlogo.png" alt="">
                <h2>ITEM NAME</h2>
                <h3>PRICE : ₱ 00.00</h3>
                <h3>STATUS :</h3>
                <input type="radio" id="status" name="status"value="Available"/><label for="Account Type">Available</label>
                <input type="radio" id="status" name="status"value="Available"/><label for="Account Type">Not Available</label>

                <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</h1>

                <input type="save" value="SAVE" class="ibtn">

            </div>
        </div>
    </div>

<!-- profile section ends  -->

<?php include 'seller-footer.php'; ?>  


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
