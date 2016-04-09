<html>
<head>
    <title>
        Account Info
    </title>
</head>
<body>
<h1>
    Welcome!
</h1>
<h2>
    Account information
</h2>
<form action="EditUserInfo.php" method="post">
    <?php
    session_start();
    $username = $_SESSION["username"];
    $password = $_SESSION["password"];
    ?>
    Login <input type = "text" name="name" value=<?php echo $username ?> ><br/>
    Old Password <input type = "password" name = "oldPassword" value = ""><br/>
    New Password<input type="password" name ="newPassword" value =""><br/>
    Repeat New Password<input type="password" name ="repeatPassword" value=""><br/>
    <input type = "submit" name ="submitEdit" value="Save">
</form>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Monica
 * Date: 07-04-2016
 * Time: 10:53
 */

require_once ("../model/DbConnection.php");
require_once ("../model/user.php");


class editUserInfo{
    private $user;
    private $dbConnection;

    function  __construct()
    {
        $this->dbConnection = new DbConnection();
    }

    function setUser($username, $userpassword){
        $this->user = new user();
        $this->user->setName($username);
        $this->user->setPassword($userpassword);
    }
    function updateUser($username, $newPass){
        $this->dbConnection->updateUser($username, $newPass);
    }

}
//EDIT METHODS
if(isset($_POST["submitEdit"])){
    $oldPass = $_POST['oldPassword'];
    $newPass = $_POST['newPassword'];
    $repNewPass = $_POST['repeatPassword'];

    if(($oldPass!=$newPass)&&($newPass==$repNewPass)) {
      /*  echo $oldPass;
        echo $newPass;
        echo $repNewPass;*/
        $editUserInfo= new EditUserInfo();
        $editUserInfo->updateUser($username, $newPass);
    }
}
?>