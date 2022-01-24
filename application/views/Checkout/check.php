<?=isset($message) ? $message : "";?>
<script src="<?php echo base_url('/assets/jquery-3.6.0.min.js'); ?>"></script>
<form method="POST" action="/Team-2/users/updateUser/">

                <input type="hidden" name="user_id" value ="<?php echo $user['user_id']?>">

                <p>Full Name:
                <?php echo $user['user_name']?> 
                </p>        

                <p>Address:
                <?php echo $user['user_address']?>
                </p>       

                <p>Contact Number:
                <?php echo $user['user_contact_no']?>
                </p>       

             <h3><?php echo $product_a->product_name; ?></h3>
                 <p><?php echo $product_a->product_description; ?></p>
                <p>Php<h3><?php echo $product_a->product_price; ?></h3></p>

	
                

                <script type="text/javascript">
     var products = <?php echo json_encode($product); ?>;

    $(document).ready( function() {
        $('.readMore').click( function(event) {
       
            var productId = event.target.id;
            for(var i = 0; i < products.length; i++) {
               if(products[i].product_id == productId) {
                $('.itemName').text(products[i].product_name);
                $('.itemPrice').text('₱ '+products[i].product_price);
                $('.itemDescription').text(products[i].product_description);
               }
            }
         }
        );

        $('.addToCart').click( function () {

        });

    });
   
    
    </script>
