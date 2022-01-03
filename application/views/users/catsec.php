<!DOCTYPE html>
<html lang="en">
<head>

<?php include 'assets/head.php'; ?>

</head>
<body>
<?php include 'assets/header2.php'; ?>  
<!-- categories section starts  -->

<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/categories.jpg" alt="">
            <h3>top food</h3>
            <p>upto 45% off</p>
            <a href='<?php echo base_url()."users/shopsec"?>' class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="images/categories.jpg" alt="">
            <h3>classics</h3>
            <p>upto 45% off</p>
            <a href='<?php echo base_url()."users/shopsec"?>' class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="images/categories.jpg" alt="">
            <h3>budget meal</h3>
            <p>upto 45% off</p>
            <a href='<?php echo base_url()."users/shopsec"?>' class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="images/categories.jpg" alt="">
            <h3>refreshers</h3>
            <p>upto 45% off</p>
            <a href='<?php echo base_url()."users/shopsec"?>' class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="images/categories.jpg" alt="">
            <h3>sweets & dessert</h3>
            <p>upto 45% off</p>
            <a href='<?php echo base_url()."users/shopsec"?>' class="btn">shop now</a>
        </div>

    </div>

</section>

<!-- categories section ends -->

<?php include 'assets/footer.php'; ?>  

<script src="<?php echo base_url(); ?>https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="<?php echo base_url(); ?>assets/script.js"></script>

</body>
</html>
