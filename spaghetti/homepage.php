<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'head.php'; ?>

</head>
<body>
    
    <?php include 'header2.php'; ?>

    <div class="popup" id="popup1">
            <div class="overlay"></div>
                <div class="item-content">
                    <div class="close-btn" onclick="togglePopup()">&times;</div>
                    <img src="./images/foodlogo.png" alt="">
                    <h3>Item Name</h3>
                    <h2>Price</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
                    <button onclick="togglePopup()">Read more</button>
                </div>
        </div>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>