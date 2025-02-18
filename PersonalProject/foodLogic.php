<?php 

  include_once('config.php');


  if (isset($_POST['submit'])) {
  	
  	$food_name = $_POST['food_name'];
  	$food_ingredients = $_POST['food_ingredients'];
  	$price = $_POST['price'];
  	$quantity = $_POST['quantity'];
  	$food_image = $_POST['food_image'];

  	// var_dump($food_name);


  	$sql = "INSERT INTO foods(food_name,food_ingredients,price,quantity,food_image) VALUES(:food_name, :food_ingredients, :price, :quantity, :food_image)";


  	$insertFood = $conn->prepare($sql);
			

	$insertFood->bindParam(':food_name', $food_name);
	$insertFood->bindParam(':food_ingredients', $food_ingredients);
	$insertFood->bindParam(':price', $price);
	$insertFood->bindParam(':quantity', $quantity);
	$insertFood->bindParam(':food_image', $food_image);

	$insertFood->execute();

	header("Location: menu.php");


  }




 ?>