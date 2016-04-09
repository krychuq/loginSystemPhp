<?php
/**
 * Created by PhpStorm.
 * User: krystian
 * Date: 2016-04-08
 * Time: 15:05
 */
session_start();
?>
<html>

<head>

    <title>
        delete user
    </title>
</head>

    <body>
     <?php $username = $_SESSION['username'] ?>
    <form action = "deleteUser.php" method="post">

        User name: <input type="text" name="name" value= <?php echo $username ?> > <br/>
        password: <input type="password" name="password" value=""> <br/>
        repeat password: <input type="password" name="repeatPassword" value=""><br/>
        <input type="submit" name="submit" value="delete">

        <?php

           if(isset($_POST['submit'])){

               $password = $_POST['password'];
               $repeatePassword = $_POST['repeatPassword'];
               if(strcmp($password,$repeatePassword)==0){
                   echo "you user will be delete soon";
               }

           }

        ?>


    </form>

    </body>
</html>
