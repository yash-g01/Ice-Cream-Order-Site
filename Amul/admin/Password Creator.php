<?php

echo"
<form method='post'>
<input type='text' name='pass'>
<input type='submit' name='hash'>
</form>
$loc
";
if(isset($_POST['hash'])){
    $pass = $_POST['pass'];
    $secure_pass = password_hash($pass, PASSWORD_BCRYPT);

    echo"
    <p>$secure_pass</p>";
}