<!-- header section starts  -->

<header class="header">

<<<<<<<< HEAD:assets/header2sellerside.php
    <a href="#" class="logo"> <i class="fas fa-utensils"></i> The New Tayuman- Seller Side </a>

    <nav class="navbar">
        <a href='<?php echo base_url()."userssellerside/homepage"?>'>Home</a>       
        <a href='<?php echo base_url()."userssellerside/shopsec"?>'>shops</a>
        <a href='<?php echo base_url()."ProductControllerSeller/index"?>'>products</a>
        <a href='<?php echo base_url()."userssellerside/catsec"?>'>categories</a>
========
    <a href="#" class="logo"> <i class="fas fa-utensils"></i> The New Tayuman </a>

    <nav class="navbar">
        <a href='<?php echo base_url()."Homepage"?>'>Home</a>
        <a href='<?php echo base_url()."users/featuresec"?>'>features</a>
        <a href='<?php echo base_url()."users/shopsec"?>'>shops</a>
        <a href='<?php echo base_url()."users/productsec"?>'>products</a>
        <a href='<?php echo base_url()."users/catsec"?>'>categories</a>
>>>>>>>> origin/FoehnNew:application/views/users/header2.php
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="Search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="<?php echo base_url(); ?>assets//images/coffeebryant.png" alt="">
            <div class="content">
                <h3>Coffee Bryant</h3>
                <span class="price">₱20.00/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="<?php echo base_url(); ?>assets//images/carbonara.jpg" alt="">
            <div class="content">
                <h3>Carbonara</h3>
                <span class="price">₱20.00/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="<?php echo base_url(); ?>assets//images/cheesebread.jpg" alt="">
            <div class="content">
                <h3>Cheese Bread</h3>
                <span class="price">₱10.00/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="total"> total : ₱50.00 </div>
        <a href="#" class="btn">checkout</a>
    </div>

    <form action="" class="login-form">

<<<<<<<< HEAD:assets/header2sellerside.php
            <a href='<?php echo base_url()."Userssellerside/viewUser"?>'>Profile</a>
            <a href='<?php echo base_url()."/logout"?>'>Logout</a>
            <a href='<?php echo base_url()."Userssellerside/edituser"?>'>Settings</a><br>
            <a href='<?php echo base_url()."Userssellerside/devsec"?>'>Developers</a>
========
            <a href='<?php echo base_url()."users/viewUser"?>'>Profile</a>
            <a href='<?php echo base_url()."/logout"?>'>Logout</a>
            <a href='<?php echo base_url()."users/edituser"?>'>Settings</a><br>
            <a href='<?php echo base_url()."users/devsec"?>'>Developers</a>
>>>>>>>> origin/FoehnNew:application/views/users/header2.php

    </form>

</header>

<!-- header section ends -->