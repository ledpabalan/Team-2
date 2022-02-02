<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'assets/head.php'; ?>

	<title>ITEM VIEW</title>
   </head>
<body>
<?php include 'assets/header3.php'; ?>  

<!-- <?php $id = $this->session->userdata('user_id'); ?> -->
<div class="profile">
<p>ITEM VIEW</p>
<a href='<?php echo base_url()."Product/index"?>'>[ Back to ITEMS ]<i  id="addprod"></i></a><br><br>

<?=isset($message) ? $message : "";?>
<div class="seller-itembox">
            <p>---Image------------------------------------Description--------------------------------------Details--</p>

        <section class="items-items" id="items-items">

            <div class="box-container">

                 <div class="box">
<?php  
         foreach ($h->result() as $row)  
         {  
            ?><tr>  
           <br>
           <img  src="<?php echo base_url(); ?>assets/images/coffeebryant.png">
           <h2>ID:<?php echo $row->product_id;?></h2> 
           <h3>Name:<?php echo $row->product_name;?></h3> 
           <h3>Description:<?php echo $row->product_description;?></h3>
           <h3>Price:<?php echo $row->product_price;?> </h3>
           <a href='<?php echo base_url()."Product/updateprod"?>'class="ibtn">Edit<i  id="addprod"></i></a>
            <input type="delete" value="DELETE" class="ibtn">
            </tr> <br>
         <?php }?>  
         </div><br>
         <div class="box">
         <a href="#popup1"class="abtn">+<i  id="addprod"></i></a>
         </div>
         </section>
         </div>
         </div>
         <a href='<?php echo base_url()."/Homepage"?>'>go back</a>
         </div>
<div id="popup1" class="overlay">
      <div class="popup1">
            <a class="close" href="#">&times;</a>
               <?=isset($message) ? $message : "";?>

               <form method='POST'action="<?php echo site_url('Product/addprod2'); ?>">  

                  
                  <h3>Add Product:</h3>
                  <input type="text" name="product_name" placeholder="Product Name" required>

                  <h3>Add Product Description:</h3>
                  <!--<input type="text" name="product_description" placeholder="Product Description">-->
                  <textarea rows="4" cols="30" name="product_description" placeholer="Enter Description Here..." required></textarea>

                  <h3>Price:</h3>
                  <input type="text" name="product_price" placeholder="P 0.00" required>

               
                  <br>
                  <br>
         
                  <input type="submit" name ="add product" value="Add Product" required>
               </form> 
      </div>
</div>
<?php include 'assets/footer.php'; ?>  

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="assets/script.js"></script>

      </body>
</html>
