<?php

include "config.php";

$aid = $_POST['AID'];
$pass = $_POST['Pass'];

$result = mysqli_query($con, "SELECT * FROM `ALOGIN` WHERE ADMIN_ID = '$aid'");

session_start();

if(mysqli_num_rows($result)){
    $row = mysqli_fetch_assoc($result);
    if(password_verify($pass,$row['Password'])){
    $_SESSION['admin'] = $aid;
    echo "
    <script>
    alert('Login Succesful.');
    window.location.href = 'manage.php';
    </script>
    ";}
    else{
        echo"
    <script>
    alert('Wrong Password.');
    window.location.href = 'index.php';
    </script>";
    }
}

else{
    echo"
    <script>
    alert('Admin ID not found. Please contact office.');
    window.location.href = 'index.php';
    </script>
    ";
}
?>