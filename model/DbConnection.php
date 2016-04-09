<?php

 class DbConnection{

  //attributes
  private $dbhost;
  private $dbuser;
  private $dbpassword;
  private $dbname;
  private $conn;
     private $sql;


     //constructor
     function __construct(){

         $this->dbhost = "sql4.freesqldatabase.com";
         $this->dbuser = "sql496304";
         $this->dbpassword = "JnfWuYHb7F";
         $this->dbname = "sql496304";
         $this->conn = mysqli_connect($this->dbhost, $this->dbuser,$this->dbpassword,$this->dbname);

         //checking if conn is created
         if(mysqli_connect_errno()){
             return false;
         }else{
             echo "123";
             return true;
         }
     }

     /**
      * @return bool
      */

     function insertUser($username, $password)
     {
         $this->sql = "INSERT INTO users (userName, password)
          VALUES ('$username', '$password')";

        if($this->conn->query($this->sql)===TRUE){
            echo "New record created successfully";
        }else{
            echo "Error: " . $this->sql . "<br>" . $this->conn->error;
        }

     }
     function updateUser($username, $password){
         $this->sql = "UPDATE users SET password='$password' WHERE userName='$username'";
         if ($this->conn->query($this->sql)===TRUE) {
             echo $username. " ".$password;
             echo "Record updated successfully";
         } else {
             echo "Error updating record: " . $this->sql . "<br>" . $this->conn->error;
         }
     }

     function checkUser($username, $password){
         $this->sql = "SELECT userName, password FROM users WHERE userName ='$username' AND password ='$password'";
         $results = $this->conn->query($this->sql);
         if($results->num_rows===1){
             echo "its works";
             return true;
         }else{
             echo "it's not";
             return false;
         }


     }
 }
?>







