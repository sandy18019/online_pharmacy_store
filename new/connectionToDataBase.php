<?php

class connection  {
           public $servername = "localhost";
           public $username = "root";
           public $password = "";
           public $dbname = "mona";


           public  function Connect(){
           $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
           return $conn;

           }
        }

?>
