 <?php 

    session_start();

    include_once('config.php');

    $user_id = $_SESSION['user_id'];

    if (empty($_SESSION['username'])) {
          header("Location: login.php");
    }

    if ($_SESSION['is_admin'] == 1) {
     
    # get all reservation
     $sql = "SELECT u.user, u.email,f.food_name, f.food_ingredients, f.quantity,f.price,b.food_name, b.food_ingredients, b.quantity,b.price,s.food_name, s.food_ingredients, s.quantity,s.price,d.drink_name, d.quantity,d.price,a.adrink_name a.quantity,f.price,
      FROM foods f , burgers b , sandwiches s , drinks d , adrinks a 
      INNER JOIN orders o
      ON m.movie_id = r.movie_id
      INNER JOIN users u
      ON f.id= u.user_id";

    $selectOrder = $conn->prepare($sql);
    $selectOrder->execute();

    $orderData = $selectOrder->fetchAll();

    }else{

       $sql = "SELECT m.movie_name, n.name, n.email,r.number_tickets, r.date, r.time 
      FROM movies m 
      INNER JOIN reservation r
      ON m.movie_id = r.movie_id
      INNER JOIN users n
      ON n.id= r.user_id 
      WHERE r.user_id = :user_id";

      $selectOrder = $conn->prepare($sql);
      $selectOrder->bindParam(':user_id', $user_id);
      $selectOrder->execute();

      $orderData = $selectOrder->fetchAll();

    }


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Orders</title>
  
  <style>
    table {
      border: 1px solid black;
       border-collapse: collapse;
    }

    th,td{
      padding: 5px 10px;
    }

  </style>

 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
  	<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
	<meta name="theme-color" content="#7952b3">
 </head>
 <body>
 
 
 <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><?php echo "Welcome to dashboard ".$_SESSION['username']; ?></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="login.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
      
        </ul>

       
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
        
        <table class="table table-striped table-sm" >
    <thead>
      <th>User</th>
      <th>Email</th>
      <th>Food Name</th>
      <th>Ingredients</th>
      <th>Quantity</th>
      <th>Price</th>
    </thead>
    <tbody>

      <?php 
        foreach ($orderData as $orderData) { 
      ?>  
          <tr>
            <td><?php echo $orderData['name']; ?></td>
            <td><?php echo $orderData['email']; ?></td>
            <td><?php echo $orderData['food_name.burger_name.sandwich_name']; ?></td>
            <td><?php echo $orderData['food_ingredients.burger_ingredients.sandwich_ingredients']; ?></td>
            <td><?php echo $orderData['quantity']; ?></td>
            <td><?php echo $orderData['price']; ?></td>
          </tr>  

      <?php  }  ?>

    </tbody>
  </table>

  <a href="home.php" class="btn btn-sm btn-outline-secondary" style="margin-top: 20px;">Back Home</a>

   

     
    </main>
  </div>
</div>

	<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>


 </body>
 </html>