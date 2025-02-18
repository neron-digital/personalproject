 <?php 

 include_once('config.php');

 $sql = 'SELECT * FROM foods';
 $selectFood = $conn->prepare($sql);
 $selectFood->execute();
 $food_data = $selectFood->fetchAll();

 $sql = 'SELECT * FROM burgers';
 $selectBurger = $conn->prepare($sql);
 $selectBurger->execute();
 $burger_data = $selectBurger->fetchAll();

 $sql = 'SELECT * FROM sandwiches';
 $selectSandwich = $conn->prepare($sql);
 $selectSandwich->execute();
 $sandwich_data = $selectSandwich->fetchAll();

 $sql = 'SELECT * FROM drinks';
 $selectDrink = $conn->prepare($sql);
 $selectDrink->execute();
 $drink_data = $selectDrink->fetchAll();

  $sql = 'SELECT * FROM adrinks';
 $selectAdrink = $conn->prepare($sql);
 $selectAdrink->execute();
 $adrink_data = $selectAdrink->fetchAll();




 ?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="css4/style4.css">
	<link href="https://fonts.googleapis.com/css2?family=Festive&family=Italiana&family=Merienda:wght@400;700&family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
</head>
<body>
   

	<header>
		
		<nav>
			<ul style="margin-right: 80px;
  margin-top: 70px; width: 680px; height: 100px; display: flex;">
				<li><a href="index.html">Home</a></li>
				<li><a href="menu.php" class="active">Menu</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
        <li><a href="login.php">Log in</a></li>
        <li><a href="signup.php">Sign up</a></li>
      </ul>
		</nav>
	</header>

 	<section class="section-1">
	<div style="margin-left: 40px; 	padding-top: 30px;">
		<img src="images/burger.png" class="logo" style="height: 150px;
	width: 150px;">
	</div>
	<div class="div2">
		<h1 style="font-size: 80px;">Menu</h1>
	</div>
</section>

<style>
body{
	padding: 0;
	margin: 0;
}

*{
	padding: 0;
	margin: 0;
}

.logo{
	height: 150px;
	width: 150px;
	

}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  float: right;
}

li {
  float: left;
  /*background-color: #bd8139;*/
  margin-right: 10px;
  /*border-radius: 10px;*/
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

a{
	text-align: center;
	font-family: 'Italiana', serif;
	font-size: 25px;
	text-shadow: 2px 2px #fcba03;
	font-weight: bold;
}

nav a:hover{
	height: 32px;
	width: 77px;
	background-color: #bf8002;
	padding: 10px 20px;
	border-radius: 4px;
}

.active{
	background-color: #bf8002;
	border-radius: 4px;
	height: 32px;
	width: 77px;
	padding: 10px 20px;
}

.section-2{
  width: 100%;
  height: 700px;
  background-image: linear-gradient(rgba(0,0,0,0.6) , rgba(0,0,0,0.3)), url(../images/b1.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  color: white;
}

.section-3{
  width: 100%;
  height: 500px;
  background-image: linear-gradient(rgba(0,0,0,0.6) , rgba(0,0,0,0.3)), url(../images/sandwich.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  color: white;
}

.section-4{
  width: 100%;
  height: 500px;
  background-image: linear-gradient(rgba(0,0,0,0.6) , rgba(0,0,0,0.3)), url(../images/drinks.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  color: white;
}

.section-5{
  width: 100%;
  height: 500px;
  background-image: linear-gradient(rgba(0,0,0,0.6) , rgba(0,0,0,0.3)), url(../images/al.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  color: white;
}

.footer{
  width: 100%;
  height: 100px;
  background-color: #0a0a0a;
  text-align: center;
}

.p7{
  padding-top: 40px;
  font-family: 'Italiana', serif;
  font-weight: bold;
  font-size: 27px;
  color: white;
}
</style>



    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">

    

    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">

    
  </head>
   

    
<main style="text-align: center;">

  <div class="album py-5 bg-body-tertiary" >
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php  foreach ($food_data as $food_data) { ?>

        <div class="col" >
          <div class="card shadow-sm">
            <img src="images/<?php echo $food_data['food_image'];?>">
            <div class="card-body">
              <h1><?php echo $food_data['food_name'];?></h1>
              <p class="card-text">Ingredients: <?php echo $food_data['food_ingredients'];?></p>
              <p class="card-text" style="font-weight: bold;">Price: <?php echo $food_data['price'];?>$</p>
              <div class="d-flex justify-content-between align-items-center" style="flex-direction: column;">
                <div class="card-body ">
                  <p> Quantity:</p>
                  <input  id="demoInput5" type="number" name="quantity" min="0" max="10" style="text-align: center;">
                </div>
                <div class="card shadow-sm">
                  <button class="btn btn-warning" style=" width: 100px; height: 35px; font-size: 14px; text-align: center;" type="submit" name="submit">Order</button>
                </div>
               
              </div>
            </div>
          </div>
        </div>

       <?php } ?>

      </div>
    </div>
  </div>

</main>

<section class="section-2">

  <h1 style="font-size: 120px; padding-top: 350px; padding-left: 30px;">Burgers</h1>

</section>

<main style="text-align: center;">

  <div class="album py-5 bg-body-tertiary" >
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php  foreach ($burger_data as $burger_data) { ?>

        <div class="col" >
          <div class="card shadow-sm">
            <img src="images/<?php echo $burger_data['burger_image'];?>">
            <div class="card-body">
              <h1><?php echo $burger_data['burger_name'];?></h1>
              <p class="card-text">Ingredients: <?php echo $burger_data['burger_ingredients'];?></p>
              <p class="card-text" style="font-weight: bold;">Price: <?php echo $burger_data['price'];?>$</p>
              <div class="d-flex justify-content-between align-items-center" style="flex-direction: column;">
                <div class="card-body">
                  <p> Quantity:</p>
                  <input  id="demoInput5" type="number" name="quantity" min="0" max="10" style="text-align: center;">
                <div class="card shadow-sm">
                  <button class="btn btn-warning" style=" width: 100px; height: 35px; font-size: 14px; text-align: center;" type="submit" name="submit">Order</button>
                </div>
               
              </div>
            </div>
          </div>
        </div>

       <?php } ?>

      </div>
    </div>
  </div>

</main>

<section class="section-3">

  <h1 style="font-size: 120px; padding-top: 150px; padding-left: 500px;">Sandwiches</h1>

</section>

<main style="text-align: center;">

  <div class="album py-5 bg-body-tertiary" >
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php  foreach ($sandwich_data as $sandwich_data) { ?>

        <div class="col" >
          <div class="card shadow-sm">
            <img src="images/<?php echo $sandwich_data['sandwich_image'];?>">
            <div class="card-body">
              <h1><?php echo $sandwich_data['sandwich_name'];?></h1>
              <p class="card-text">Ingredients: <?php echo $sandwich_data['sandwich_ingredients'];?></p>
              <p class="card-text" style="font-weight: bold;">Price: <?php echo $burger_data['price'];?>$</p>
              <div class="d-flex justify-content-between align-items-center" style="flex-direction: column;">
                <div class="card-body">
                  <p> Quantity:</p>
                  <input  id="demoInput5" type="number" name="quantity" min="0" max="10" style="text-align: center;">
                </div>
                <div class="card shadow-sm">
                  <button class="btn btn-warning" style=" width: 100px; height: 35px; font-size: 14px; text-align: center;" type="submit" name="submit">Order</button>
                </div>
               
              </div>
            </div>
          </div>
        </div>

       <?php } ?>

      </div>
    </div>
  </div>

</main>

<section class="section-4">

  <h1 style="font-size: 40px; padding-top: 250px; padding-left: 30px;">Drinks</h1>

</section>

<main style="text-align: center;">

  <div class="album py-5 bg-body-tertiary" >
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php  foreach ($drink_data as $drink_data) { ?>

        <div class="col" >
          <div class="card shadow-sm">
            <img src="images/<?php echo $drink_data['drink_image'];?>">
            <div class="card-body">
              <h1><?php echo $drink_data['drink_name'];?></h1>
              <p class="card-text" style="font-weight: bold;">Price: <?php echo $drink_data['price'];?>$</p>
              <div class="d-flex justify-content-between align-items-center" style="flex-direction: column;">
                <div class="card-body">
                  <p> Quantity:</p>
                  <input  id="demoInput5" type="number" name="quantity" min="0" max="10" style="text-align: center;">
                </div>
                <div class="card shadow-sm">
                  <button class="btn btn-warning" style=" width: 100px; height: 35px; font-size: 14px; text-align: center;" type="submit" name="submit">Order</button>
                </div>
               
              </div>
            </div>
          </div>
        </div>

       <?php } ?>

      </div>
    </div>
  </div>

</main>

<section class="section-5">

  <h1 style="font-size: 40px; padding-top: 250px; padding-left: 30px;">Alcoholic Drinks</h1>

</section>

<main style="text-align: center;">

  <div class="album py-5 bg-body-tertiary" >
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php  foreach ($adrink_data as $adrink_data) { ?>

        <div class="col" >
          <div class="card shadow-sm" >
            <img src="images/<?php echo $adrink_data['adrink_image'];?>" >
            <div class="card-body">
              <h1><?php echo $adrink_data['adrink_name'];?></h1>
              <p class="card-text" style="font-weight: bold;">Price: <?php echo $adrink_data['price'];?>$</p>
              <div class="d-flex justify-content-between align-items-center" style="flex-direction: column;">
                <div class="card-body">
                  <p> Quantity:</p>
                  <input  id="demoInput5" type="number" name="quantity" min="0" max="10" style="text-align: center;">
                </div>
                <div class="card shadow-sm">
                  <button class="btn btn-warning" style=" width: 100px; height: 35px; font-size: 14px; text-align: center;" type="submit" name="submit">Order</button>
                </div>
               
              </div>
            </div>
          </div>
        </div>

       <?php } ?>

      </div>
    </div>
  </div>

</main>

<footer class="footer">
      <p class="p7"></p>
</footer>


    

    <script src="js/main.js"></script>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

 





</body>
</html>