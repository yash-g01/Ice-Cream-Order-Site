<?php

include "config.php";

$uname = $_POST['Uname'];
$pass = $_POST['Pass'];

$result = mysqli_query($con, "SELECT * FROM `LOGIN` WHERE Username = '$uname'");

session_start();

if(mysqli_num_rows($result)){
    $row = mysqli_fetch_assoc($result);
    if(password_verify($pass,$row['Password'])){
    $_SESSION['user'] = $uname;
    echo "
    <script>
    alert('Login Succesful.');
    window.location.href = 'index.php';
    </script>
    ";}
    //if pass doesn't match
    else{
        echo"
    <script>
    alert('Wrong Password.');
    window.location.href = 'login.php';
    </script>";
    }
}

//If usernsme doesn't match
else{
    echo"
    <script>
    alert('No User Found. Please Register.');
    window.location.href = 'login.php';
    </script>
    ";
}
?>