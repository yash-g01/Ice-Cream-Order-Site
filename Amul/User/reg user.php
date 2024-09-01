<?php

include 'config.php';


    $uname = $_POST['UName'];
    $upass = $_POST['UPass'];
    $secure_pass = password_hash($upass, PASSWORD_BCRYPT);

$Dup_uname = mysqli_query($con, "SELECT * FROM `LOGIN` WHERE Username = '$uname'");
if (mysqli_num_rows($Dup_uname)){
    echo "
    <script>
    alert('Username already registered. Please try another username.');
    window.location.href = 'signup.php';
    </script>";
}

else{
mysqli_query($con, "INSERT INTO `LOGIN`(`Username`, `Password`) 
            VALUES ('$uname', '$secure_pass')");
            echo "
            <script>
            alert('Registered Succesfully. Please login now.');
            window.location.href = 'login.php';
            </script>";
}

?>