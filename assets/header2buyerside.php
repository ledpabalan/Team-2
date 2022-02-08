<!-- header section starts  -->

<header class="header">

    <a class="logo"> <i class="fas fa-utensils"></i> The New Tayuman | Buyer </a>
    
    <nav class="navbar">
        <a href='<?php echo base_url()."usersbuyerside/homepage"?>'>Home</a>       
        <a href='<?php echo base_url()."ProductControllerBuyer/index"?>'>products</a>
        <a href='<?php echo base_url()."CartController/index"?>'>Cart</a>
        <a href='<?php echo base_url()."usersbuyerside/catsec"?>'>categories</a>

    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>
    <form action="" class="login-form">

            <a href='<?php echo base_url()."Usersbuyerside/viewUser"?>'>Profile</a>
            <a href='<?php echo base_url()."usersbuyerside/edituser"?>'>Settings</a><br>
            <a href='<?php echo base_url()."/logout"?>'>Logout</a>

    </form>

</header>

<!-- header section ends -->