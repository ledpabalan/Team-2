<!DOCTYPE html>
<html lang="en">
<div>
<?=isset($message) ? $message :""; ?>
<br>
<br>
    <head>
    </head>
    <body>
       <p>  YOUR EMAIL IS SUCCESSFULLY SENT </p>
        <p> PLEASE CHECK YOUR EMAIL </p>
    <p> <a href ="/Team-2/index.php/users/login/">  CLICK HERE TO RETURN TO LOGIN PAGE</a> </p>

    <a href= '<?php echo base_url()."/prep"?>'>LOG OUT</a>
    </body>
</div>
