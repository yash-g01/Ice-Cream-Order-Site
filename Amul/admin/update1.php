<?php
include 'config.php';
if(isset($_POST['update'])){
    $ID = $_POST['ID'];
    $PRICE = $_POST['PPrice'];
    $STOCK = $_POST['PStock'];

    mysqli_query($con,"UPDATE `Products` SET `Price`='$PRICE',`Stock`='$STOCK' WHERE `ID`='$ID'");
    echo  "
    <script>
    alert('Update successful.');
    window.location.href = 'products.php';
    </script>
    ";
}
?>