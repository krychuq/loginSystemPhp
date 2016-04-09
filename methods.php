<?php

  function redirectTo($newLocation){
      header("Location: ". $newLocation);
  }
  function checkIfSubmit($valueToCheck){
      if(isset($valueToCheck)){
          echo "yes the value is set";
      }else{
          echo "no it's not";
      }
  }
/**
 * Created by PhpStorm.
 * User: Monica
 * Date: 07-04-2016
 * Time: 09:34
 */
?>