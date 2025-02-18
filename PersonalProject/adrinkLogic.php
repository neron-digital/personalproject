<?php 

  include_once('config.php');


  if (isset($_POST['submit'])) {
    
    $adrink_name = $_POST['adrink_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $adrink_image = $_POST['adrink_image'];

    // var_dump($food_name);


    $sql = "INSERT INTO adrinks(adrink_name, price,quantity,adrink_image) VALUES(:adrink_name, :price, :quantity, :adrink_image)";


    $insertAdrink = $conn->prepare($sql);
      

  $insertAdrink->bindParam(':adrink_name', $adrink_name);
  $insertAdrink->bindParam(':price', $price);
  $insertAdrink->bindParam(':quantity', $quantity);
  $insertAdrink->bindParam(':adrink_image', $adrink_image);

  $insertAdrink->execute();

  header("Location: menu.php");


  }




 ?>