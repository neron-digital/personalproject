<?php 

  include_once('config.php');


  if (isset($_POST['submit'])) {
  	
  	$burger_name = $_POST['burger_name'];
  	$burger_ingredients = $_POST['burger_ingredients'];
  	$price = $_POST['price'];
  	$quantity = $_POST['quantity'];
  	$burger_image = $_POST['burger_image'];

  	// var_dump($food_name);


  	$sql = "INSERT INTO burgers(burger_name,burger_ingredients,price,quantity,burger_image) VALUES(:burger_name, :burger_ingredients, :price, :quantity, :burger_image)";


  	$insertBurger = $conn->prepare($sql);
			

	$insertBurger->bindParam(':burger_name', $burger_name);
	$insertBurger->bindParam(':burger_ingredients', $burger_ingredients);
	$insertBurger->bindParam(':price', $price);
	$insertBurger->bindParam(':quantity', $quantity);
	$insertBurger->bindParam(':burger_image', $burger_image);

	$insertBurger->execute();

	header("Location: menu.php");


  }




 ?>