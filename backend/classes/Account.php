<?php

  class Account{
      private $pdo;
      private $errorArray=array();

      public function __construct(){
          $this->pdo=Database::instance();
      }

      public function validateEmail($em){

        if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
            return array_push($this->errorArray,"Invalid");
        }
      }
  }
?>