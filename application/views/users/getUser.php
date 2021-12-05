<div>
<?=isset($message) ? $message :""; ?>
<br>
<p> <a href ="/Team-2/index.php/users/register/"> Add User </a> </p>
<p> <a href ="/Team-2/index.php/users"> View Active </a> </p>
<p> <a href ="/Team-2/index.php/users/Viewinactive/"> View Inactive </a> </p>
<br>
<table>
    <head>
        <td> User Id    </td>
        <td> Fullname    </td>
        <td> Username   </td>
        <td> Email    </td>
        <td> Status    </td>
        <td> Action    </td>
    </head>
    <body>
        <?php   foreach($users as $user) { ?>
        <tr>
        <td> <?php echo $user['user_id']?> </td>
        <td> <?php echo $user['user_name']?></td>
        <td> <?php echo $user['user_username']?>   </td>
        <td> <?php echo $user['user_email']?>    </td>
        <td> <?php echo $user['user_acc_status']?>   </td>

        <td> 
            <a href ="/Team-2/index.php/users/Viewuser/<?php echo $user['user_id'];?>">View </a>

            <?php
                    if($user['user_acc_status'] == "Active") {
            ?>            <a href ="/Team-2/index.php/users/updateStatus/<?php echo $user['user_id'];?>/Inactive">Deactivate</a>
            <?php   } 
                    else {
            ?>            <a href ="/Team-2/index.php/users/updateStatus/<?php echo $user['user_id'];?>/Active">Activate</a>
            <?php } ?>
        </td>
        </tr>
        <?php } ?>

    </body>
</table>
</div>
