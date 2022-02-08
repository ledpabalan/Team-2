<!DOCTYPE html>
<html lang="en">
<head>
<script src="<?php echo base_url('/assets/jquery-3.6.0.min.js'); ?>"></script>
    <?php include 'assets/headsellerside.php'; ?>

</head>
<body>
    <?php include 'assets/header2sellerside.php'; ?>  
<!-- usershop section starts  -->


<section class="all-products" id="all-products">

<h1 class="heading">all<span>products</span> </h1>

<a href="<?php echo base_url(); ?>ProductControllerSeller/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New Product</a><br><br>
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
    <h3>Php <?php echo $product_a->product_price; ?></h3>

    <td><a href="<?php echo base_url();?>ProductController/edit/<?php echo $product_a->product_id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> || <a href="<?php echo base_url(); ?>ProductControllerSeller/delete/<?php echo $product_a->product_id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
    <br>
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
                <input type="hidden" name="" value="0">
                <h2 class= 'itemName'>ITEM NAME</h2>
                <h3 class= 'itemPrice'>₱ 00.00</h3>
                <h1 class= 'itemDescription'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</h1>
                <h4>QUANTITY :</h4>
                <div class="quantity">
                    <button class="btn minus-btn disabled" type="button">-</button>
                    <input type="text" id="quantity" value="0">
                    <button class="btn plus-btn" type="button">+</button>
                </div> 
                <div class="atc-btn">
                    <div class="fas fa-shopping-cart addToCart"> Add To Cart</div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup" class="overlay">
      <div class="popup1">
            <a class="close" href="#">&times;</a>
               <form method="POST" action="<?php echo base_url(); ?>ProductController/insert">
                  <h3>Add Product:</h3>
                  <input type="text" name="product_name" placeholder="Product Name" required>
                  

                  <h1>Add Product Description:</h1>
                  <!--<input type="text" name="product_description" placeholder="Product Description">-->
                  <textarea rows="4" cols="30" name="product_description" placeholer="Enter Description Here..." required></textarea>
     
                  <h1>Price:</h1>
                  <input type="text" name="product_price" placeholder="P 0.00" required>

               
                  <br>
         
                  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
               </form> 
      </div>
</div>
<!-- usershop section ends -->

<?php include 'assets/sellerfooter.php'; ?>  


<script type="text/javascript">
     var products = <?php echo json_encode($product); ?>;

    $(document).ready( function() {
        $('.readMore').click( function(event) {
       
            var productId = event.target.id;
            for(var i = 0; i < products.length; i++) {
               if(products[i].product_id == productId) {
                $('.itemName').text(products[i].product_name);
                $('.itemPrice').text('₱ '+products[i].product_price);
                $('.itemDescription').text(products[i].product_description);
               }
            }
         }
        );

        $('.addToCart').click( function () {

        });

    });
   
    
    </script>



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
