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
    <div class='login'>
      <form action='adminlogin.php' method='POST'>
        <h2>Log In</h2>
        <input type="text" placeholder="Enter Admin ID" name='AID' required><br>
        <input type="password" placeholder="Enter Password" name='Pass' required><br>
        <button class="green">Login</button><br>
      </form>
    </div>
  </body>
</html>