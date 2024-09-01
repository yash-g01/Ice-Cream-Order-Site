<!DOCTYPE html>
<html>
  <head>
    <title>
      Amul - Admin Panel
    </title>
    
    <meta charset='UTF-8'>
    <meta name='description' content='Manage Products and Services on Amul Ordering Page.'>
    <meta name='keywords' content='Admin, Amul, Ice Cream'>
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
    ?>
    <header>
      <a href="manage.php"><img src='../img/logo.jpeg' width = '115px' height='40px' alt='Amul Logo'></a>
      <div class="header-right">
        <a href="manage.php">Home</a>
        <a>Hello,<?php
        if(isset($_SESSION['admin'])){
          echo $_SESSION['admin']."</a>";
          echo "
          <a href='logout.php' style='color:red'>Logout</a>
          ";
        }

      else{
          header("location:index.php");
      }
        ?>
        <a href="../user/" target="_blank">User</a>
      </div>
    </header>
    <menu>
      <ul class='types'>
        <li><a href="products.php">Manage Products</a></li>
        <li><a href="users.php">Manage Users</a></li>
        <li><a href="sales.php">Sale Summary</a></li>
      </ul>
    </menu>
  </body>
</html>