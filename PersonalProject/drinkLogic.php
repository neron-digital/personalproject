<?php 

  include_once('config.php');


  if (isset($_POST['submit'])) {
  	
  	$drink_name = $_POST['drink_name'];
  	$price = $_POST['price'];
  	$quantity = $_POST['quantity'];
  	$drink_image = $_POST['drink_image'];

  	// var_dump($food_name);


  	$sql = "INSERT INTO drinks(drink_name, price,quantity,drink_image) VALUES(:drink_name, :price, :quantity, :drink_image)";


  	$insertDrink = $conn->prepare($sql);
			

	$insertDrink->bindParam(':drink_name', $drink_name);
	$insertDrink->bindParam(':price', $price);
	$insertDrink->bindParam(':quantity', $quantity);
	$insertDrink->bindParam(':drink_image', $drink_image);

	$insertDrink->execute();

	header("Location: menu.php");


  }




 ?>