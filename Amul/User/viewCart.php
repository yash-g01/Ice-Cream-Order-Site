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
?>
    <h1>My Cart</h1>
    <?php
    if(!empty($_SESSION['cart'])){
        echo"
    <table class='center'>
        <thead>
            <th>Sr. No.</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Total Price</th>
            <th>Update</th>
            <th>Delete</th>
        </thead>
        <tbody>";}

        else{
            echo"
            <main>
            <h2> Your Cart is Empty :( </h2>
            </main>
            ";
        }
        ?>
            <?php
        
        $ptotal = 0;
        $total = 0;
        $n = 0;
        if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $key=> $value){
            //ADDITION OF PRICE
            $ptotal = intval($value['PPrice']) * intval($value['PQuant']);
            $total += intval($value['PPrice']) * intval($value['PQuant']);
            $n = $key +1;
        echo"
            <form action = 'Insertcart.php' method = 'POST'>
            <tr>
            <td>$n</td>
            <td><input type='hidden' name='PName' value='$value[PName]'>$value[PName]</td>
            <td><input type='hidden' name='PPrice' value='$value[PPrice]'>$value[PPrice]</td>
            <td><input type='text' name='PQuantity' value='$value[PQuant]'></td>
            <td>$ptotal</td>
            <td><button name='update' class= 'green'>Update</button></td>
            <td><button name='remove' class = 'red'>Delete</button></td>
            <input type = 'hidden' name = 'item' value = '$value[PName]'>
            </tr>
            </form>
            ";
        }

        echo"
        </tbody>
        </table>";

        if($total!=0){
            echo"
        <h1> Grand Total :"; echo number_format($total,2);
        echo"</h1>";
        echo"
        <form action = 'Insertcart.php' method = 'POST'>
            <input type='hidden' name='Ptotal' value='$total'>
            <input type='submit' name='Buy' class='orange' value='Buy Now' style='position: relative; left: 50%;'>
        </form>
        <h4>Cart will be empty, if you logout.</h4>";
        }
    }
    ?>
</body>
</html>