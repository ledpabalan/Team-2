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
            <a href="profile.php">Profile</a> <br>
            <a class="active" href="allpurchases.php">Purchases</a> <br>

            <input type="submit" value="LOG OUT" class="lobtn">

        <div class="productbox">
            <a href="allpurchases.php">All</a> 
            <a href="recpurchases.php">To Receive</a> 
            <a class="active" href="compurchases.php">Completed</a> 
            <a href="trpurchases.php">To Rate</a> 

        <section class="products-buy" id="products-buy">

            <div class="box-container">

                <div class="box">
                    <h2>Shop Name</h2>
                    <img src="./images/coffeebryant.png" alt="">
                    <h1>Completed</h1>
                    <input type="submit" value="BUY AGAIN" class="pbtn">
                    <input type="submit" value="DETAILS" class="pbtn">
                    <h3>Coffee Bryant</h3>
                    <p>Price : ₱ 20.00</p>
                     <p>Quantity : x1</p>
                    
                </div><br>
            </div>

        </section>
            
        </div>

    </div>

<!-- profile section ends  -->

<?php include 'footer.php'; ?>  


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
