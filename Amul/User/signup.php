<!DOCTYPE html>
<html>
  <head>
    <title>
      Amul - User Register
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
      <form name='signup' action="reg user.php" onsubmit="return validateSignUp()" method="POST">
      <h2>Register</h2>
      <input type="text" placeholder="Enter Username" name='UName' required><br>
      <input type="password" placeholder="Enter Password" name='UPass' required><br>
      <button class="green" name="submit">Register</button><br>
      <a href='login.php'>Already Registered?Login</a><br>
      <a href='index.php'>Go back to Home</a>
    </form>
    <br><br>
    <h2>
      Password Condition:
    </h2>
    <h4>Password must be at least 8 characters</h4>
    <h4>Password must contain at least one lowercase letter</h4>
    <h4>Password must contain at least one uppercase letter</h4>
    <h4>Password must contain at least one number</h4>
    <h4>Password must not exceed 16 characters</h4>
    </div>
    <script>
      function validateSignUp() {
        const password = document.forms["signup"]["UPass"].value;

        if(password.length < 8) {
          alert("Error: Password must be at least 8 characters");
          return false;
        }

        else if(password.search(/[a-z]/) < 0) { 
          alert("Error: Password must contain at least one lowercase letter");
          return false;
        }
        
        else if(password.search(/[A-Z]/) < 0) {
          alert("Error: Password must contain at least one uppercase letter");
          return false;
        }
        
        else if(password.search(/[0-9]/) < 0) {
          alert("Error: Password must contain at least one number");
          return false;
        }

        else if(password.length > 16){
          alert("Error: Password must not exceed 16 characters");
          return false;
        }
      }
    </script>
  </body>
</html>