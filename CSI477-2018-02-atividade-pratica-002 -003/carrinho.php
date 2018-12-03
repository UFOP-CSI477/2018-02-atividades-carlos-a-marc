<?php

  $database = "petshop";
  $dbusername = "sistemaweb";
  $dbpassword = "123456";
  $dbhost = "127.0.0.1";
  $mysql = "mysql:host=$dbhost;dbname=$database";

  $connection = new PDO($mysql, $dbusername, $dbpassword);

  $produtos = $connection->query("SELECT * FROM produtos");

  if(isset($_POST['id_txt'])){
  	$carrinho = $connection->query("SELECT * FROM produtos WHERE id =" . $_POST['id_txt']);
  }

  require 'view-carrinho.php';