<!DOCTYPE html>
<html lang="en">

<head>
    <script src="<?php echo base_url('/assets/jquery-3.6.0.min.js'); ?>"></script>
    <?php include 'assets/headbuyerside.php'; ?>

</head>

<body>

    <!-- usershop section starts  -->

    <?php include 'assets/header2buyerside.php'; ?>

    <section class="all-products" id="all-products">

        <h1 class="heading">all<span>products</span> </h1><br><br>


        <div class="box-container">
            <?php
            foreach ($product as $product_a) {
            ?>

                <tr>

<div class="box">

    <img src="<?php echo base_url(); ?>assets/images/foodlogo.png" alt="">
    <h3><?php echo $product_a->product_name; ?></h3>
    <p><?php echo $product_a->product_description; ?></p>
    <p>Php<h3><?php echo $product_a->product_price; ?></h3></p>

    <br>
    <td><a href="<?php echo base_url();?>CartController/edit/<?php echo $product_a->product_id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Add to Cart</a>
    <td><a href="<?php echo base_url();?>ProductControllerBuyer/checkout/<?php echo $product_a->product_id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Buy Now</a>
</div>

            <!-- -->

            </tr>
            <?php
            }
            ?>

</section>

    <?php include 'assets/footer.php'; ?>

    <script type="text/javascript">
        var products = <?php echo json_encode($product); ?>;

        $(document).ready(function() {
            $('.readMore').click(function(event) {

                var productId = event.target.id;
                for (var i = 0; i < products.length; i++) {
                    if (products[i].product_id == productId) {
                        $('.itemName').text(products[i].product_name);
                        $('.itemPrice').text('₱ ' + products[i].product_price);
                        $('.itemDescription').text(products[i].product_description);
                    }
                }
            });

            $('.addToCart').click(function() {

            });

        });
    </script>

    

    <!-- custom js file link  -->
    <script src="<?php echo base_url(); ?>assets/script.js"></script>

    <script>
        /*script for nav bar */
        let searchForm = document.querySelector('.search-form');

        document.querySelector('#search-btn').onclick = () => {
            searchForm.classList.toggle('active');
            shoppingCart.classList.remove('active');
            loginForm.classList.remove('active');
            navbar.classList.remove('active');
        }

        let shoppingCart = document.querySelector('.shopping-cart');

        document.querySelector('#cart-btn').onclick = () => {
            shoppingCart.classList.toggle('active');
            searchForm.classList.remove('active');
            loginForm.classList.remove('active');
            navbar.classList.remove('active');
        }

        let loginForm = document.querySelector('.login-form');

        document.querySelector('#login-btn').onclick = () => {
            loginForm.classList.toggle('active');
            searchForm.classList.remove('active');
            shoppingCart.classList.remove('active');
            navbar.classList.remove('active');
        }

        let navbar = document.querySelector('.navbar');

        document.querySelector('#menu-btn').onclick = () => {
            navbar.classList.toggle('active');
            searchForm.classList.remove('active');
            shoppingCart.classList.remove('active');
            loginForm.classList.remove('active');
        }

        window.onscroll = () => {
            searchForm.classList.remove('active');
            shoppingCart.classList.remove('active');
            loginForm.classList.remove('active');
            navbar.classList.remove('active');
        }
    </script>

    <script>
        /*quantity script */
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
        var valueCount
        document.querySelector(".plus-btn").addEventListener("click", function() {
            valueCount = document.getElementById("quantity").value;

            valueCount++;

            document.getElementById("quantity").value = valueCount;

            if (valueCount >= 0) {
                document.querySelector(".minus-btn").removeAttribute("disabled");
                document.querySelector(".minus-btn").classList.remove("disabled")
            }
        })
        document.querySelector(".minus-btn").addEventListener("click", function() {

            valueCount = document.getElementById("quantity").value;

            valueCount--;

            document.getElementById("quantity").value = valueCount

            if (valueCount == 0) {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
            }
        })
    </script>

<script>
    /*script for quantity */
    document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
var valueCount
document.querySelector(".plus-btn").addEventListener("click", function() {
    valueCount = document.getElementById("quantity").value;

    valueCount++;

    document.getElementById("quantity").value = valueCount;

    if (valueCount >= 0) {
        document.querySelector(".minus-btn").removeAttribute("disabled");
        document.querySelector(".minus-btn").classList.remove("disabled")
    }
})
document.querySelector(".minus-btn").addEventListener("click", function() {

    valueCount = document.getElementById("quantity").value;

    valueCount--;

    document.getElementById("quantity").value = valueCount

    if (valueCount == 0) {
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
    }
})
</script>

</body>

</html>