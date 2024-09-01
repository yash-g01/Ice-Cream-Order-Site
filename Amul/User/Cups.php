<!DOCTYPE html>
<html>
  <head>
    <title>
      Amul - Cup Ice Creams
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
    <h1>Cups</h1>
    <main>
    <div class='main'>

    <?php
    include 'config.php';
    $Prod = mysqli_query($con, "select * from Products where CATEGORY='CUPS' and Stock>0");
    if(mysqli_num_rows($Prod)){
    while($fetch = mysqli_fetch_array($Prod)){
      echo "
      <form action='Insertcart.php' method='POST'>
      <div class='grid-items'>
        <img src='../admin/$fetch[Image]' width='375px' height='376px'>
        <h5>$fetch[Name]</h5>
        <p>Rs. $fetch[Price]</p>
        <input type='hidden' name='PName' value='$fetch[Name]'>
        <input type='hidden' name='PPrice' value='$fetch[Price]'>
        <input type='number' name='PQuant' value='min='1' max='100'' placeholder='Quantity' required><br>
        <input type='submit' name='addCart' value='Add to Cart' class='orange'>
      </div>
      </form>
    ";
  }
}
else{
  echo"
  </div>
  <h1>Sorry, we are out of stock in this category</h1>
  <h1>We are re-stocking. Please check back in a while.</h1>
  ";
}
  ?>
  </div>
</main>
  </body>