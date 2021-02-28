
<?php include 'commerce.php'; 

	$name    =  $_GET['productName'];
	$r_price =  $_GET['productPrice'];
	/*$images = array();
		foreach ('http://booklanewp.test/wp-content/uploads/2021/02/sapiens.jpg' as $img) {
  		  array_push($images, array("src" => $img));}*/
	$description=$_GET['productDescription'];



	if ($name == null or $r_price == null){
		echo 'error';
		exit();
	}

	$data = [
    'name' => $name,
	'regular_price' => $r_price,
	'images' => [
		[
			'src' => 'http://bookmaze.test/wp-content/uploads/2021/02/theWitcher.jpg'
		]],
	'description'=>$description
	];
	

	// var_dump($data);

$woocommerce->post('products', $data);

header('Location: http://localhost/woocommerce/listProducts.php');


?>