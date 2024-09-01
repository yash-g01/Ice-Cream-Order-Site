<!DOCTYPE html>
<html>
  <head>
    <title>
      Amul - My Orders
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

    <?php
    include 'header.php';
    ?>
  </head>
  <body>
    <h1>My Orders</h1>
    <main>

    <?php
    include 'config.php';
    $user = $_SESSION['user'];
    $Orders = mysqli_query($con, "SELECT * FROM `orders` WHERE `User`='$user' ORDER BY `Date`");
    $rowcount=mysqli_num_rows($Orders);
    if($rowcount != 0){
    while($fetch = mysqli_fetch_array($Orders)){
        $OID = $fetch['O_ID'];
        $Date = $fetch['Date'];
        $Time = $fetch['Time'];
        $Total = $fetch['Total'];
            echo"
            <form action='order1.php' method='POST'>
                <h2><input type='hidden' name='oid' value='$OID'>Order ID: $OID</h2>
                <p><input type='hidden' name='date' value='$Date'>Order Date: $Date</p>
                <p><input type='hidden' name='time' value='$Time'>Order Time: $Time IST</p>
                <input type='hidden' name='total' value='$Total'>
                <input type='submit' name='ODetail' class='green' value='View Details'>
                <hr>
            </form>
                ";}}
    else{
        echo"
          <h2> You haven't ordered anything from us :( </h2>
          ";
        }
        ?>
</main>
  </body>
</html>