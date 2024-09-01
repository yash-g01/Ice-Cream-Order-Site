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
    include "manage.php";
    include "config.php";
    ?>
    <main>
        <h1>Sales Summary</h1>

    <?php
    $Orders = mysqli_query($con, "SELECT * FROM `orders` ORDER BY `Date`");
    $Sale = mysqli_query($con, "SELECT SUM(`Total`) FROM `orders`");
    $f_Sale = mysqli_fetch_array($Sale);
    $T_Sale = $f_Sale['SUM(`Total`)'];
    $rowcount=mysqli_num_rows($Orders);
    if($rowcount != 0){
        echo"
        <h1>Total Sale from Website = Rs. $T_Sale</h1>";
    }
    else{
        echo"
          <h2> Nothing sold through website :( </h2>
          ";
        }
    ?>
    </main>
  </body>
</html>