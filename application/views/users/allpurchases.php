<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'assets/head.php'; ?>

</head>
<body>
    <?php include 'assets/header2.php'; ?>  

<!-- all purchases section starts  -->

    <div class="profile">   
            <h5>My Account</h5>
            <a href='<?php echo base_url()."users/viewUser"?>'>Profile</a> <br>
            <a class="active" href='<?php echo base_url()."users/allpurchases"?>'>Purchases</a> <br>

            <a class="lobtn" href= '<?php echo base_url()."/logout"?>'>LOG OUT</a>
   
        <div class="productbox">
            <a class="active" href='<?php echo base_url()."users/allpurchases"?>'>All</a> 
            <a href='<?php echo base_url()."users/recpurchases"?>'>To Receive</a> 
            <a href='<?php echo base_url()."users/compurchases"?>'>Completed</a> 
            <a href='<?php echo base_url()."users/trpurchases"?>'>To Rate</a> 

        <section class="products-buy" id="products-buy">

            <div class="box-container">

                 <div class="box">
                     <h2>Shop Name</h2>
                     <img src="<?php echo base_url(); ?>assets/images/cheesebread.jpg" alt="">
                     <h1>To Receive</h1>
                     <h3>Cheese Bread</h3>
                     <p>Price : ₱ 10.00</p>
                     <p>Quantity : x1</p>
                     <input type="submit" value="BUY AGAIN" class="pbtn">
                     <input type="submit" value="DETAILS" class="pbtn">
                 </div><br>

                <div class="box">
                    <h2>Shop Name</h2>
                    <img src="<?php echo base_url(); ?>assets/images/coffeebryant.png" alt="">
                    <h1>Completed</h1>
                    <h3>Coffee Bryant</h3>
                    <p>Price : ₱ 20.00</p>
                     <p>Quantity : x1</p>
                    <input type="submit" value="BUY AGAIN" class="pbtn">
                    <input type="submit" value="DETAILS" class="pbtn">
                </div><br>

                <div class="box">
                     <h2>Shop Name</h2>
                     <img src="<?php echo base_url(); ?>assets/images/cheesebread.jpg" alt="">
                     <h1>To Rate</h1>
                     <h3>Cheese Bread</h3>
                     <p>Price : ₱ 10.00</p>
                     <p>Quantity : x1</p>
                     <input type="submit" value="BUY AGAIN" class="pbtn">
                     <input type="submit" value="DETAILS" class="pbtn">
                 </div><br>

                 <div class="box">
                     <h2>Shop Name</h2>
                     <img src="<?php echo base_url(); ?>assets/images/cheesebread.jpg" alt="">
                     <h1>To Rate</h1>
                     <h3>Cheese Bread</h3>
                     <p>Price : ₱ 30.00</p>
                     <p>Quantity : x3</p>
                     <input type="submit" value="BUY AGAIN" class="pbtn">
                     <input type="submit" value="DETAILS" class="pbtn">
                 </div><br>

                 <div class="box">
                     <h2>Shop Name</h2>
                     <img src="<?php echo base_url(); ?>assets/images/cheesebread.jpg" alt="">
                     <h1>To Rate</h1>
                     <h3>Cheese Bread</h3>
                     <p>Price : ₱ 30.00</p>
                     <p>Quantity : x3</p>
                     <input type="submit" value="BUY AGAIN" class="pbtn">
                     <input type="submit" value="DETAILS" class="pbtn">
                 </div><br>
            </div>

        </section>
            
        </div>

    </div>

<!-- all purchases section ends  -->

<?php include 'assets/footer.php'; ?>  


<script src="<?php echo base_url(); ?>https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="<?php echo base_url(); ?>assets/script.js"></script>

</body>
</html>
