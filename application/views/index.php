<?=isset($message) ? $message : "";?>
<form method="POST" action="/Team-2/homepage/"> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The New Tayuman</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/style.css">
    

</head>
<body>
    <?php echo $this->session->userdata('user_name'); ?>
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-utensils"></i> TheNewTayuman </a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#features">Features</a>
        <a href="#shops">Shops</a>
        <a href="#categories">Categories</a>

    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <a href='#'><i class="fas fa-user" id="login-btn"></i></a>
        
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <a href='<?php echo base_url()."users/logout"?>'> log out<i  id="logout"></i></a>


</header>

<!-- header section ends -->

<section>
<form action="" class="profile">
        <nav class="profile- nav">
            <h5>My Account</h5>
            <a href="#">Profile</a> <br>
            <a href="#">Purchases</a> <br>
            <a href="#">Change<br>Password</a>

            <input type="submit" value="LOG OUT" class="lobtn">
        </nav>
        
        <div class="profilebox">
            <h3>My Profile</h3>

            <h4>Username: ___________________________________ </h4> 
            
            <h4>Full Name: ____________________________________</h4>
            
            <h4>Address:   ____________________________________</h4>
            
            <h4>Birthdate: __/__/____     Age: _____</h4>
            
            <h4>Gender: _________  Contact No.: _______________</h4>
           
            <img class="avatar" src="./images/profilepic.png">
            <h6>"LETS GO TAYUMAN"</h6>
            
            <input type="submit" value="SAVE" class="btn">

            <input type="submit" value="DEACTIVATE" class="btn">
        </div>


    </form>

</section>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>fresh and <span>classic</span> products for you</h3>
        <p>brought to you by The New Tayuman</p>
        <a href="#" class="btn">shop now</a>
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/fea food 1.jpg" alt="">
            <h3>Tayuman Classics</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/fea motor 2" alt="">
            <h3>free delivery</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/fea payment 3.png" alt="">
            <h3>easy payments</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- shops section starts  -->

<section class="shops" id="shops">

    <h1 class="heading"> our <span>shops</span> </h1>

    <div class="swiper shop-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="<?php echo base_url(); ?>assets/images/shop logo.png" alt="">
                <h3>Shop Name</h3>
                <div class="price"> Starts at ₱4.99- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="<?php echo base_url(); ?>assets/images/shop logo.png" alt="">
                <h3>Shop Name</h3>
                <div class="price"> Starts at ₱4.99- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="<?php echo base_url(); ?>assets/images/shop logo.png" alt="">
                <h3>Shop Name</h3>
                <div class="price"> Starts at ₱4.99- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="<?php echo base_url(); ?>assets/images/shop logo.png" alt="">
                <h3>Shop Name</h3>
                <div class="price"> Starts at ₱4.99- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>

    <div class="swiper shop-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="<?php echo base_url(); ?>assets/images/shop logo.png" alt="">
                <h3>Shop Name</h3>
                <div class="price"> Starts at ₱4.99- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="<?php echo base_url(); ?>assets/images/shop logo.png" alt="">
                <h3>Shop Name</h3>
                <div class="price"> Starts at ₱4.99- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="<?php echo base_url(); ?>assets/images/shop logo.png" alt="">
                <h3>Shop Name</h3>
                <div class="price"> Starts at ₱4.99- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="<?php echo base_url(); ?>assets/images/shop logo.png" alt="">
                <h3>Shop Name</h3>
                <div class="price"> Starts at ₱4.99- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>


</section>

<!-- shops section ends -->

<!-- categories section starts  -->

<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/categories.jpg" alt="">
            <h3>top foods</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/categories.jpg" alt="">
            <h3>classics</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/categories.jpg" alt="">
            <h3>budget meal</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/categories.jpg" alt="">
            <h3>refreshers</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="<?php echo base_url(); ?>assets/images/categories.jpg" alt="">
            <h3>sweets & dessert</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

    </div>

</section>

<!-- categories section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3><i class="fas fa-utensils"></i> TheNewTayuman </h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, saepe.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +6399-9999-9999 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +6399-9999-9999 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> tuptayuman@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Manila, Philippines </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#features" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#shops" class="links"> <i class="fas fa-arrow-right"></i> shops </a>
            <a href="#categories" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
        </div>

    </div>

    <div class="credit"> &copy;2021 <span> TheNewTayuman </span> | all rights reserved </div>
    
</section>

<!-- footer section ends -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
</form>   