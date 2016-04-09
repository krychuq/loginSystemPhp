<?php
/**
 * Created by PhpStorm.
 * User: Monica
 * Date: 07-04-2016
 * Time: 10:53
 */
//php -r 'include "MyClass.php"; MyClass::foo();'

require_once ("../controller/CreateUserController.php");


?>



<?php
$username = "hell";
$password = "noo";
//creating DbConnection object
//$dbConnection = new DbConnection();
//make connection to database
//$dbConnection->connectToDb();


if(isset($_POST["submit"])){
    //attributes
    $username = $_POST["username"];
    $password = $_POST["password"];
    //controller
    $controller = new CreateUserController();
    $controller->setUser($username, $password);

}

?>
<html>
<head>
    <title>
        Sign Up!
    </title>
</head>
<body>
    <h1>
        Create user
    </h1>
    <form action="CreateUser.php" method="post">
        username <input type = "text" name = "username" value = ""><br/>
        password<input type="password" name ="password" value =""><br/>
        repeat password<input type="password" name ="repeatPassword" value=""><br/>
        <input type = "submit" name ="submit" value="Sign Up">
    </form>

</body>
</html>

