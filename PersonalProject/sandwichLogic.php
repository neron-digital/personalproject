<?php 

  include_once('config.php');


  if (isset($_POST['submit'])) {
  	
  	$sandwich_name = $_POST['sandwich_name'];
  	$sandwich_ingredients = $_POST['sandwich_ingredients'];
  	$price = $_POST['price'];
  	$quantity = $_POST['quantity'];
  	$sandwich_image = $_POST['sandwich_image'];

  	// var_dump($food_name);


  	$sql = "INSERT INTO sandwiches(sandwich_name,sandwich_ingredients,price,quantity,sandwich_image) VALUES(:sandwich_name, :sandwich_ingredients, :price, :quantity, :sandwich_image)";


  	$insertSandwich = $conn->prepare($sql);
			

	$insertSandwich->bindParam(':sandwich_name', $sandwich_name);
	$insertSandwich->bindParam(':sandwich_ingredients', $sandwich_ingredients);
	$insertSandwich->bindParam(':price', $price);
	$insertSandwich->bindParam(':quantity', $quantity);
	$insertSandwich->bindParam(':sandwich_image', $sandwich_image);

	$insertSandwich->execute();

	header("Location: menu.php");


  }




 ?>