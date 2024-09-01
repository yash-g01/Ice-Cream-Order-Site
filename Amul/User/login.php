<!DOCTYPE html>
<html>
  <head>
    <title>
      Amul - User Login
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
  <body>
    <div class='login'>
      <form action='logincheck.php' method='POST'>
      <h2>Log In</h2>
      <input type="text" placeholder="Enter Username" name='Uname' required><br>
      <input type="password" placeholder="Enter Password" name='Pass' required><br>
      <button type='submit' class="green">Login</button><br>
      <a href='signup.php'>New User?Register</a><br>
      <a href='index.php'>Go back to Home</a>
    </form>
    </div>
  </body>
</html>