<?php

include 'config.php';


if(isset($_POST['upload'])){
    $NAME = $_POST['PName'];
    $PRICE = $_POST['PPrice'];
    $STOCK = $_POST['PStock'];
    $CAT = $_POST['PCategory'];
    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "/uploadImage/".$img_name;
    move_uploaded_file($img_loc,'uploadImage/'.$img_name);

    $Dup_PName = mysqli_query($con, "SELECT * FROM `PRODUCTS` WHERE Name = '$NAME'");

    if (mysqli_num_rows($Dup_PName)){
        echo "
        <script>
        alert('Product already registered.');
        window.location.href = 'products.php';
        </script>";
    }

    else {
    mysqli_query($con,"INSERT INTO `Products`( `Name`, `Price`, `Stock`, `Category`, `Image`) VALUES ('$NAME','$PRICE', '$STOCK','$CAT', '$img_des')");
    echo "
    <script>
    alert('Product successfully registered.');
    window.location.href = 'products.php';
    </script>";
}
}