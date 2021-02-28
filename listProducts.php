<?php include 'commerce.php'; ?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Liste de produits</title>
    <style type="text/css">
    	#ProductList {
    		width: 100%;
    		border: solid black 1px;
    	}
    	.actions {
			position: absolute;
			margin-left: auto;
			margin-right: auto;
			left: 0;
			right: 0;
			text-align: center;
	    	}

    	.action {
    		margin: 5px ;
    	}
    </style>
  </head>
  <body style="background-color:lavenderblush">
  <body>
       <div class="header" style=" padding: 45px;
                                  text-align: center;
                                  background: #d26c6c;
                                  color: Moccasin;
                                  font-size: 30px;">
        <h1>Product list</h1>
     </div>
    <div class="container">
    		<h1 style="margin:50px auto;text-align:center;font-family:papyrus,cursive;font-size:60px;font-weight:bold;"></h1>
			<div style="margin-bottom: 50px;text-align:right;">
		        <a href="/woocommerce/addProduct.php" class="btn btn-dark" style="font-size:25px;">Add Product</a>
		    </div>
    	    <div class="row">
    	    	<?php foreach ($woocommerce->get('products') as $product): ?>
    	    	<div class="col-lg-1"></div>
		    	    	<div class="shadow-lg p-4 mb-4 bg-white col-lg-3 product">
			    	    	<ul style="list-style:none;">
			    	    		<li><h6>Nom de produit :</h6> <span><?= $product->name ?></span></li>
			    	    		<li><h6>Prix de produit :</h6> <span><?= $product->price ?></span>$</li>
			    	    	</ul>
		    	    		<div class="actions">
							<a href="/woocommerce/delete.php?id=<?= $product->id ?>" class="btn btn-danger">Delete</a>
		    	    		<a href="/woocommerce/editProduct.php?id=<?= $product->id ?>" class="btn btn-dark">Update</a>
		    	    		</div>
		    	    	</div>
						
				<?php endforeach; ?>
				<!--<div style="margin-top: 50px;margin-left:150 ;text-align:right;">
		        <a href="/woocommerce/abstractwc-csv-batch-exporter.php" class="btn btn-dark" style="font-size:25px;">Export Products</a>
		   			 </div>-->
		    </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>