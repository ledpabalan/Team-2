<form method="POST">

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <?php include 'assets/headsellerside.php'; ?>

    </head>

    <body>
        <?php include 'assets/header2sellerside.php'; ?>
        <?= isset($message) ? $message : ""; ?>
        <!-- <?php $id = $this->session->userdata('user_id'); ?> -->


        <!-- profile section starts  -->

        <div class="profile">
            <h5>ADD PRODUCT</h5>
            <a href='<?php echo base_url() . "Product/index" ?>'>[ Back to ITEMS ]<i id="addprod"></i></a><br><br>
            <div class="editprofilebox">
                <?= isset($message) ? $message : ""; ?>
                <form method='POST' action="<?php echo site_url('Product/addprod2'); ?>">
                    <h3>Add Product:</h3>
                    <input type="text" name="product_name" placeholder="Product Name" required>

                    <h3>Add Product Description:</h3>
                    <!--<input type="text" name="product_description" placeholder="Product Description">-->
                    <textarea rows="4" cols="30" name="product_description" placeholer="Enter Description Here..." required></textarea>

                    <h3>Price:</h3>
                    <input type="text" name="product_price" placeholder="P 0.00" required>


                    <br>
                    <br>

                    <input type="submit" name="add product" value="Add Product" required>
                </form>

            </div>
     
        </div>


    </body>

    </html>