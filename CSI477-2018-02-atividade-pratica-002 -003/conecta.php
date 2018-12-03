<?php

  $database = "petshop";
  $dbusername = "sistemaweb";
  $dbpassword = "123456";
  $dbhost = "127.0.0.1";
  $mysql = "mysql:host=$dbhost;dbname=$database";

  $connection = new PDO($mysql, $dbusername, $dbpassword);
  
  ?>
