<!DOCTYPE html>
<html lang="en">
<head>

<?php include 'assets/headsellerside.php'; ?>

</head>
<body>
<?php include 'assets/header2sellerside.php'; ?>   

<!-- queue order section starts  -->

    <div class="profile">   
        <h5>My Orders</h5>
            <a href='<?php echo base_url()."Userssellerside/sellerpenorder"?>'>Pending</a><br>
            <a class="active" href='<?php echo base_url()."Userssellerside/sellerqorder"?>'>Queue</a><br>
            <a href='<?php echo base_url()."Userssellerside/sellercomorder"?>'>Completed</a><br>

        <div class="seller-orderbox">

        <section class="pending-order" id="pending-order">

            <div class="box-container">

                 <div class="box">
                     <div class="ordernum"><h2>Order No.</h2></div>
                     <div class="username"><h2>Username</h2></div>
                     <div class="itemname"><h2>Item</h2></div>
                     <div class="quantityname"><h2>Quantity</h2></div>
                     <div class="total"><h2>Total Price</h2></div>
                     <img src="./images/cheesebread.jpg" alt="">
                     <h1>0000000X</h1>
                     <h6>@Username</h6>
                     <h3>Cheese bread</h3>
                     <h4>x2</h4>
                     <h5>P30</h5>
                     <input type="submit" value="FINISH ORDER" class="pbtn">
                     <input type="submit1" value="CANCEL ORDER" class="pbtn">
                 </div><br>

                 
                 <div class="box">
                     <div class="ordernum"><h2>Order No.</h2></div>
                     <div class="username"><h2>Username</h2></div>
                     <div class="itemname"><h2>Item</h2></div>
                     <div class="quantityname"><h2>Quantity</h2></div>
                     <div class="total"><h2>Total Price</h2></div>
                     <img src="./images/cheesebread.jpg" alt="">
                     <h1>0000000X</h1>
                     <h6>@Username</h6>
                     <h3>Cheese bread</h3>
                     <h4>x1</h4>
                     <h5>P15</h5>
                     <input type="submit" value="FINISH ORDER" class="pbtn">
                     <input type="submit1" value="CANCEL ORDER" class="pbtn">
                 </div><br>




        </section>
            
        </div>

    </div>

<!-- queue order section ends  -->

<?php include 'assets/footer.php'; ?>  


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
