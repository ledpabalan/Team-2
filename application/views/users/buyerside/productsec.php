<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'assets/headbuyerside.php'; ?>

</head>
<body>
    <?php include 'assets/header2buyerside.php'; ?>  
<!-- usershop section starts  -->


<section class="all-products" id="all-products">

<h1 class="heading">all<span>products</span> </h1>
<h1 class="heading">Buyer-Side </h1>

<!-- -->

					
<div class="box-container">
<?php
					foreach($product as $product_a){
						?>

						<tr>

<div class="box">
    <img src="<?php echo base_url(); ?>assets/images/foodlogo.png" alt="">
    <h3><?php echo $product_a->product_name; ?></h3>
    <p><?php echo $product_a->product_description; ?></p>
    <p>Php<h3><?php echo $product_a->product_price; ?></h3></p>

    <br>
    <a href="#popup1" class="rbtn">read more</a>
</div>

						</tr>
						<?php
					}
					?>

<!-- -->

</section>
    
    <div id="popup1" class="overlay">
        <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
                <img src="<?php echo base_url(); ?>assets/images/foodlogo.png" alt="">
                <h2>ITEM NAME</h2>
                <h3>₱ 00.00</h3>
                <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</h1>
                <h4>QUANTITY :</h4>
                <div class="quantity">
                    <button class="btn minus-btn disabled" type="button">-</button>
                    <input type="text" id="quantity" value="0">
                    <button class="btn plus-btn" type="button">+</button>
                </div> 
                <div class="atc-btn">
                    <div class="fas fa-shopping-cart"> Add To Cart</div>
                </div>
            </div>
        </div>
    </div>

<!-- usershop section ends -->

<?php include 'assets/footer.php'; ?>  

<script src="<?php echo base_url(); ?>https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="<?php echo base_url(); ?>assets/script.js"></script>

</body>
</html>
