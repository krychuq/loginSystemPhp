<?php
/**
 * Created by PhpStorm.
 * User: krystian
 */
require_once ("C:/wamp/www/finalProjectKry/model/DbConnection.php");
require_once ("C:/wamp/www/finalProjectKry/model/User.php");

class CreateUserController{

    private $dbConnection;
    private $user;


    //constructor
    function __construct(){


        //setting object usting constructor
        $this->dbConnection = new DbConnection();
        $this->user = new User();
        echo "constructor works";
    }
       function setUser($username, $password){
           if (strlen($username)>8 & preg_match('/[A-Z].*[0-9]|[0-9].*[A-Za-z].[A-Za-z]*[A-Z]/', $username)){
               $this->user = new User();
               $this->user->setName($username);
               $this->user->setPassword($password);
               $this->dbConnection->insertUser($username, $password);
           }



           else{
               echo "user name is empty";
           }

    }
    function setUserWith($username, $password){
        $this->user = new User();
        $this->user->setName($username);
        $this->user->setPassword($password);
    }

    function  getUser(){
        return $this->user;
    }
    function checkUser(){
        echo "</br>". $this->user->getName()."  ".  $this->user->getPassword()."<br/>";

        return $this->dbConnection->checkUser($this->user->getName(), $this->user->getPassword());

    }
}
// = new CreateUserModel();

