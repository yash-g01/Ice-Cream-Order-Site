<?php

include 'config.php';

session_start();

if(isset($_SESSION['user'])){

$USER = $_SESSION['user'];

if(isset($_POST['addCart'])){
    $PNAME = $_POST['PName'];
    $PPrice = $_POST['PPrice'];
    $PQuant = $_POST['PQuant'];
    $STOCK = mysqli_query($con, "select Stock from Products where Name ='$PNAME'");
    $f_stock = mysqli_fetch_array($STOCK);
    $stock_val = $f_stock['Stock'];
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }

    $check_product = array_column($_SESSION['cart'], 'PName');
    if(in_array($PNAME, $check_product)){
        echo "
        <script>
        alert('Item already added');
        window.location.href = 'index.php';
        </script>
        ";
    }
    else {
        if($PQuant > 0){
        if($PQuant<=$stock_val){
        $_SESSION['cart'][] = array(
            'PName' => $PNAME,
            'PPrice' => $PPrice,
            'PQuant' => $PQuant
        );
        header("location: viewCart.php");
    }
    else{
        echo"
        <script>
        alert('We only have $stock_val in stock');
        window.location.href = 'index.php';
        </script>
        ";
    }
    }
else{
    echo"
        <script>
        alert('Quantity cannot be $PQuant.');
        window.location.href = 'index.php';
        </script>
        ";
}}
}

if(isset($_POST['remove'])){
    foreach($_SESSION['cart'] as $key => $value){
        if($value['PName'] === $_POST['item']){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header('location: viewCart.php');
        }
    }
}

if(isset($_POST['update'])){
    $updated_PNAME = $_POST['PName'];
    $updated_PPrice = $_POST['PPrice'];
    $updated_PQuant = $_POST['PQuantity'];

    $STOCK = mysqli_query($con, "select Stock from Products where Name ='$updated_PNAME'");
    $f_stock = mysqli_fetch_array($STOCK);
    $stock_val = $f_stock['Stock'];

    if($updated_PQuant > 0){
    //IF STOCK IS GREATER THAN QUANTITY  
    if($updated_PQuant<=$stock_val){
    foreach($_SESSION['cart'] as $key => $value){
        if($value['PName'] === $_POST['item']){
            $_SESSION['cart'][$key] = array(
                'PName' => $updated_PNAME,
                'PPrice' => $updated_PPrice,
                'PQuant' => $updated_PQuant
            );
            header("location: viewCart.php");
            break;}
        }
    }
    else{
        echo"
        <script>
        alert('We only have $stock_val in stock');
        window.location.href = 'viewCart.php';
        </script>
        ";
    }
}
else{
    echo"
        <script>
        alert('Quantity cannot be $updated_PQuant.');
        window.location.href = 'viewCart.php';
        </script>
        ";
}
}

//To BUY
if(isset($_POST['Buy'])){
    date_default_timezone_set("Asia/Kolkata");
    $date = date("Y-m-d");
    $time = date("H:i:s");
    $total = $_POST['Ptotal'];
    $cart = serialize($_SESSION['cart']);

    foreach($_SESSION['cart'] as $key => $value){
       $buy_PNAME = $value['PName'];
       $buy_PPRICE = $value['PPrice'];
       $buy_PQUANT = $value['PQuant'];

       //Stock Update
       $STOCK = mysqli_query($con, "select Stock from Products where Name ='$buy_PNAME'");
        $f_stock = mysqli_fetch_array($STOCK);
        $stock_val = $f_stock['Stock'];

       $stock_left = intval($stock_val) - intval($buy_PQUANT);

       mysqli_query($con, "UPDATE `Products` SET `Stock`='$stock_left' WHERE `Name`='$buy_PNAME'");
    }

    mysqli_query($con, "INSERT INTO `orders`(`Date`, `Time`, `User`,`BoughtItemsArray`, `Total`) VALUES ('$date','$time','$USER','$cart','$total')");

    $_SESSION['cart'] = [];

    echo"
    <script>
    alert('Thank You for ordering. :)');
    window.location.href = 'orders.php';
    </script>
    ";
    }
}


else{
    echo"
    <script>
    alert('Please Login First.');
    window.location.href = 'login.php';
    </script>
    ";
}
?>
