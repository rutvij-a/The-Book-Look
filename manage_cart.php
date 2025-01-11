<?php
    session_start();
    error_reporting(0);


      $book = $_GET['book'];
      $price = $_GET['price'];
      //$quantity = $_POST['qty'];

      $product = array($book,$price,1);

      $_SESSION[$book] = $product;
       header("location:index.php?true=created");





?>
