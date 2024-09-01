<!DOCTYPE html>
<html>
  <head>
    <title>
      Amul - The Taste Of India
    </title>
    
    <meta charset='UTF-8'>
    <meta name='description' content='Order a large variety Amul Products Online'>
    <meta name='keywords' content='Amul, Ice Cream, Family Pack, Dessert'>
    <meta name ='author' content='Yash Pratap Gautam'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    
    <!-- Amul Icon on Tab -->
    <link rel="icon" type="image/x-icon" 
    href="https://1000logos.net/wp-content/uploads/2023/11/Amul-Logo.png">

    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
    session_start();
    $count = 0;
    if(isset($_SESSION['cart'])){
      $count = count($_SESSION['cart']);
    }
    ?>
    <header>
      <!-- Logo -->
      <a href="#default" class="logo"><img src='../img/logo.jpeg' width = '115px' height='40px' alt='Amul Logo'></a>
      <div class="header-right">
        <a href="index.php">Home</a>
        <?php
        //if logged in
        if(isset($_SESSION['user'])){
          echo "<a>Hello,". $_SESSION['user']."</a>";
          echo "
          <a href='viewCart.php'>My Cart($count)</a>
          <a href='orders.php'>My Orders</a>
          <a href='logout.php' style='color:red'>Logout</a>
          ";
        }
        else{
          echo "<a href='login.php'>Login</a>";
          echo "
          <strong><a href='signup.php' style='color:blue'>Sign Up</a></strong>
          ";
        }
        ?>
        <a href="../admin/" target="_blank">Admin</a>
      </div>
    </header>
    <!-- Menu Bar -->
     <h2 style="color=red;text-align:center;">This is a Project Website!! Please don't be mistaken. But feel free to browse. :)</h2>
    <menu>
      <ul class='types'>
        <li><a href="Cups.php">Cups</a></li>
        <li><a href="Cones.php">Cones</a></li>
        <li><a href="Sticks.php">Sticks</a></li>
        <li><a href="FP.php">Family Packs</a></li>
        <li><a href="PP.php">Party Packs</a></li>
        <li><a href="Novelties.php">Novelties</a></li>
      </ul>
    </menu>
  </body>
</html>

