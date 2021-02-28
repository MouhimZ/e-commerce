
<?php include 'commerce.php'; 


$id      =  $_GET['id'];
$name    =  $_GET['productName'];
$r_price =  $_GET['productPrice'];
;



if ($name == null or $r_price == null) {
    echo 'error';
    exit();
}

$data = [
    'name' => $name,
    'regular_price' => $r_price,
];

// var_dump($data);
// die();

$woocommerce->put('products/'.$id, $data);

header('Location: http://localhost/woocommerce/listProducts.php');


?>