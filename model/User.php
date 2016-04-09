<?php
class User{
    //attributes
    private $name;
    private $password;
    //getters and setters
    public function getName(){
        return $this->name;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setPassword($password){
        $this->password = $password;
    }
}
?>