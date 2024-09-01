<!DOCTYPE html>
<html>
  <head>
    <title>
      Amul - My Cart
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
include 'header.php';
include 'config.php';
?>
    <h1>My Orders</h1>
    <main>
    <?php
     if(isset($_POST['ODetail'])){
        $OID = $_POST['oid'];
        $Total = $_POST['total'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        echo"
        <h1>Order Total: Rs. $Total</h1>
        <h2>Order ID: $OID</h2>
        <p>Order Date: $date</p>
        <p>Order Time: $time IST</p>

        <table class='center'>
        <thead>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Total Price</th>
        </thead>
        <tbody>
        ";
     $Orders = mysqli_query($con, "SELECT * FROM `orders` WHERE `O_ID`='$OID'");
     $fetch = mysqli_fetch_assoc($Orders);
     $items = unserialize($fetch['BoughtItemsArray']);
     foreach($items as $key=>$value){
        $PName = $value['PName'];
        $PPrice = $value['PPrice'];
        $PQuant = $value['PQuant'];
        $tot = intval($PPrice)*intval($PQuant);
     echo "
     <tr>
     <td>$PName</td>
     <td>$PPrice</td>
     <td>$PQuant</td>
     <td>$tot</td>
     </tr>
     ";}}
        ?>
        </main>
</body>
</html>