<?php 

//index.php

require_once "./manager/connect.php";

// add item to cart  second think
if(isset($_POST["add_to_cart"]))
{
	if(isset($_COOKIE["shopping_cart"]))
	{
		$cookie_data = $_COOKIE['shopping_cart'];

		$cart_data = json_decode($cookie_data, true); // convert jsonn to be able to loop into it
	}
	else
	{
		$cart_data = array();
	}


		$item_array = array(    // store every item in the array has got  from post form in array
			'item_id'			=>	$_POST["hidden_id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$cart_data[] = $item_array;
	

	// second
	$item_data = json_encode($cart_data); // convert from 

	setcookie('shopping_cart', $item_data, time() + (86400 * 30)); // set cookie 

	header("location:index.php");
}





if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		$cookie_data = $_COOKIE['shopping_cart'];
		$cart_data = json_decode($cookie_data, true);
		foreach($cart_data as $keys => $values)
		{
			if($cart_data[$keys]['item_id'] == $_GET["id"])
			{
				unset($cart_data[$keys]);
				$item_data = json_encode($cart_data);
				setcookie("shopping_cart", $item_data, time() + (86400 * 30));
				header("location:index.php?remove=1");
			}
		}
	}
	
}


?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
	<head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Cosmoline</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Place favicon.ico in the root directory -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
            <!-- CSS here -->
            <link rel="stylesheet" href="assets/css/preloader.css">
            <link rel="stylesheet" href="assets/css/bootstrap.css">
            <link rel="stylesheet" href="assets/css/meanmenu.css">
            <link rel="stylesheet" href="assets/css/animate.css">
            <link rel="stylesheet" href="assets/css/owl-carousel.css">
            <link rel="stylesheet" href="assets/css/swiper-bundle.css">
            <link rel="stylesheet" href="assets/css/backtotop.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
            <link rel="stylesheet" href="assets/flaticon/flaticon.css">
            <link rel="stylesheet" href="assets/css/default.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/style.css">
    </head>
	
	<body>

    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Acueile</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Promotion</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Magasin</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>  
                    </ul>
                    <form action="panier.php"method="POST" class="d-flex">
                        <button   class="btn btn-outline-dark" type="submit">
                         <i class="bi-cart-fill me-1" ></i>
                        </span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">LES PRODUIT</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
        </header>
		<div class="container ">
			<br />
			<br /><br />

			
			<?php
			// store data  first_thing    

			$query = "SELECT * FROM tbl_product ORDER BY id ASC";
			
			$statement = $connect->prepare($query);     // prepare query for exexution
			$statement->execute();
			$result = $statement->fetchAll();     // fetch all query data into result var (assoc array by default)
			foreach($result as $row)
			{
			?>

			
			<div class="col-md-3 justify-centent-space-between">
				<form method="post">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />
						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
					</div>
				</form>
			
			</div>
			
			<?php
			// store data end 
			}
			?>
			
		  <!--      cart area -->
			
			<div style="clear:both"></div>
			<br />
			<h3>Shopping Cart</h3>
			<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<th width="40%">Item Name</th>
					<th width="10%">Quantity</th>
					<th width="20%">Price</th>
					<th width="15%">Total</th>
					<th width="5%">Action</th>
				</tr>
			<?php
			// display items in the cart  third thing 

			if(isset($_COOKIE["shopping_cart"])) // if we have cookies 
			{
				$total = 0;
				$cookie_data = $_COOKIE['shopping_cart'];
				
				$cart_data = json_decode($cookie_data, true); // convert json string and affect it to that var
				foreach($cart_data as $keys => $values)		  // disply crt shit

				{
			?>
				<tr>											
					<td><?php echo $values["item_name"]; ?></td>
					<td><?php echo $values["item_quantity"]; ?></td>
					<td>$ <?php echo $values["item_price"]; ?></td>
					<td>$ <?php echo $values["item_quantity"] * $values["item_price"];   // display price ?></td> 
					<td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
				</tr>
			<?php	
					$total = $total + ($values["item_quantity"] * $values["item_price"]); // cal total
				}
			?>
				<tr>
					<td colspan="3" align="right">Total</td>
					<td align="right">$ <?php echo number_format($total); ?></td>
					<td></td>
				</tr>
			<?php
			}
			else
			{
				echo '
				<tr>
					<td colspan="5" align="center">No Item in Cart</td>
				</tr>
				';
			}
			?>
			</table>
			</div>
		</div>
		<br />
	</body>
</html>