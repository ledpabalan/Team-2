<!-- header section starts  -->

<header class="header">

    <a href="homesec.php" class="logo"> <i class="fas fa-utensils"></i> The New Tayuman </a>

    <nav class="navbar">
        <a href="seller-homesec.php">home</a>
        <a href="seller-featuresec.php">features</a>
        <a href="seller-shopsec.php">shops</a>
        <a href="seller-catsec.php">categories</a>
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
            <img src="./images/coffeebryant.png" alt="">
            <div class="content">
                <h3>Coffee Bryant</h3>
                <span class="price">₱20.00/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="./images/carbonara.jpg" alt="">
            <div class="content">
                <h3>Carbonara</h3>
                <span class="price">₱20.00/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="./images/cheesebread.jpg" alt="">
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
            <a href="seller-profile.php">Shop Profile</a><br>
            <a href="index.php">Log out</a><br>
            <a href="seller-setting.php">Settings</a><br>
            <a href="seller-devsec.php">Developers</a>

    </form>

</header>

<!-- header section ends -->