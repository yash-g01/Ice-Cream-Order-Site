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
    include "manage.php"
    ?>
    <main>
        <h1>Manage Products</h1>
        <h2> Add Product: </h2>
        <form action="insert.php" method="POST" enctype="multipart/form-data" >
            <input type="text" name="PName" placeholder="Enter Product Name" required><br>
            <input type="number" min="0" max="1500" step="1" name="PPrice" placeholder="Enter Product Price" required><br>
            <input type="number" min="0" max="500" step="1" name="PStock" placeholder="Enter Stock Quantity" required><br>
            <label for="">Select Category: </label>
            <input type="radio" id="cups" name="PCategory" value="CUPS" required>
            <label for="cups">Cups</label>
            <input type="radio" id="cones" name="PCategory" value="CONES">
            <label for="cones">Cones</label>
            <input type="radio" id="sticks" name="PCategory" value="STICKS">
            <label for="sticks">Sticks</label>
            <input type="radio" id="fp" name="PCategory" value="FP">
            <label for="fp">Family Packs</label>
            <input type="radio" id="pp" name="PCategory" value="PP">
            <label for="pp">Party Packs</label>
            <input type="radio" id="new" name="PCategory" value="NEW">
            <label for="new">Novelties</label><br><br>
            <label for="image">Image:</label>
            <input type="file" accept="image/*" id="image" name="image" required><br><br>
            <button type="submit" name="upload" class = "green">Upload</button>
        </form>
    </main><br>
    <table class='center'>
      <thead>
        <th>ID</th>
        <th>Product</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Image</th>
        <th>Update</th>
        <th>Delete</th>
      </thead>
      <?php
        include "config.php";
        $pic = mysqli_query($con,"SELECT * FROM `Products` ORDER BY `Stock`");
        while($value = mysqli_fetch_array($pic)){
          echo "
        <tr>
          <td>$value[ID]</td>
          <td>$value[Name]</td>
          <td>$value[Price]</td>
          <td>$value[Stock]</td>
          <td><img src='./$value[Image]'  width = '200px'  height = '70px'></td>
          <td><a href='update.php?ID=$value[ID]'><button class = 'green'>Update</button></a></td>
          <td><a href='delete.php?ID=$value[ID]'><button class = 'red'>Delete</button></a></td>
        </tr>";
        }
      ?>
    </table>
  </body>
</html>