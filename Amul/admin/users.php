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
    <h1>Manage Users</h1>
    <table class='center'>
      <thead>
        <th>Username</th>
        <th>Password</th>
        <th>Delete User Account</th>
      </thead>
      <?php
        include "config.php";
        $pic = mysqli_query($con,"SELECT * FROM `LOGIN` ORDER BY `Username`");
        while($value = mysqli_fetch_array($pic)){
          echo "
        <tr>
        <form action='deleteuser.php' method='POST'>
          <td><input type='hidden' name='user' value='$value[Username]'>$value[Username]</td>
          <td>$value[Password]</td>
          <td><button type='submit' class = 'red'>Delete</button></a></td>
          </form>
        </tr>";
        }
      ?>
    </table>
  </body>
</html>