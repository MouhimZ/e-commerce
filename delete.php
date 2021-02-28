<?php
include 'commerce.php'; 
$id      =  $_GET['id'];
$woocommerce->delete('products/'.$id, ['force' => true]);
header('Location: http://localhost/woocommerce/listProducts.php');
