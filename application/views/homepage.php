<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'assets/head.php'; ?>

</head>
<body>
    <?php include 'assets/header2.php'; ?>  
    
<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>fresh and <span>classic</span> products for you</h3>
        <p>brought to you by The New Tayuman</p>
        <a href='<?php echo base_url()."Product/index"?>'>[  Products ]<i  id="vendoritem"></i></a>
         <a href='<?php echo base_url()."ProductController/index"?>'>[  Products ]<i  id="product"></i></a>
        <a href='<?php echo base_url()."users/shopsec"?>' class="btn">shop now</a>
    </div>

</section>

<!-- home section ends -->

<?php include 'assets/footer.php'; ?>  

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="assets/script.js"></script>

</body>
</html>
