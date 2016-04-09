<?php
/**
 * Created by PhpStorm.
 * User: Monica
 * Date: 07-04-2016
 * Time: 09:09
 */
//require_once ("controller/CreateUserController.php/");
session_start();

?>
<html lang ="en">
<head>
    <title>
        Welcome!!!
    </title>
</head>
<body>
Welcome <?php echo $_SESSION['username'] ;?> <br/>
Your password is: <?php echo  $_SESSION['password']; ?><br/>
If you want to view and update your information press <a href="view/EditUserInfo.php">here</a><br/>
if you want to delete your account please click <a href="view/deleteUser.php">here</a>
</body>
</html>


