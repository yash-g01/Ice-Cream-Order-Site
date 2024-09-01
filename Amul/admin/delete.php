<?php
include 'config.php';
 $ID = $_GET['ID'];
mysqli_query($con,"DELETE FROM `Products` WHERE ID = $ID");

header('location:products.php');

?>