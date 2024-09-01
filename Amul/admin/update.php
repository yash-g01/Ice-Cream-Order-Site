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
    include 'manage.php';
    include 'config.php';
    $ID = $_GET['ID'];
    $Record = mysqli_query($con,"SELECT * FROM `Products` WHERE ID = $ID");
    $data = mysqli_fetch_array($Record);

    ?>

    <main>
        <h1>Update Product</h1>
        <form action="update1.php" method="POST" enctype="multipart/form-data" >
            <h4>Product Name : <?php echo $data['Name']?></h4>
            <h4><label for="PPrice">Price:</label></h4>
            <input type="number" min="0" max="1500" step="1" id="PPrice" name="PPrice" value="<?php echo $data['Price']?>" required><br>
            <h4><label for="PStock">Stock:</label></h4>
            <input type="number" min="0" max="500" step="1" id="PStock" name="PStock" value="<?php echo $data['Stock']?>" required><br>
            <input type="hidden" name="ID"  value="<?php echo $data['ID'] ?>"><br>
            <button type="submit" name="update" class = "green">Update</button>
        </form>
    </main>
  </body>
</html>