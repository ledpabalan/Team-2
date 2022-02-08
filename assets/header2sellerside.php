<!-- header section starts  -->

<header class="header">

    <a class="logo"> <i class="fas fa-utensils"></i> The New Tayuman | Seller </a>

    <nav class="navbar">
        <a href='<?php echo base_url()."userssellerside/homepage"?>'>Home</a>       
        <a href='<?php echo base_url()."ProductControllerSeller/index"?>'>products</a>
        <a href='<?php echo base_url()."userssellerside/sellerpenorder"?>'>orders</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>
    <form action="" class="login-form">
            <a href='<?php echo base_url()."Userssellerside/viewUser"?>'>Profile</a>
            <a href='<?php echo base_url()."Userssellerside/edituser"?>'>Settings</a>
            <a href='<?php echo base_url()."/logout"?>'>Logout</a>

    </form>

</header>

<!-- header section ends -->