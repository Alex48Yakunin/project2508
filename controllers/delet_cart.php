<?php

session_start();

$postData = file_get_contents('php://input');

$cart_up = json_decode($postData, true);


$count=count($_SESSION ['cart']);

foreach ($cart_up as $key => $up) {
   if ($up['count'] == 0) {
            for ($i = $key; $i < $count-1; $i++) {
            $_SESSION['cart'][$i] =$_SESSION['cart'][$i+1];
            } 
      unset($_SESSION['cart'][$count-1]);   
   }
}

echo true;
die;
