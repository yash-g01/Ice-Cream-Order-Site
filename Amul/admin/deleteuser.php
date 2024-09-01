<?php
include 'config.php';

$USER = $_POST['user'];

mysqli_query($con,"DELETE FROM `login` WHERE Username = '$USER'");

echo"
<script>
alert('$USER acount deleted successfully.');
window.location.href = 'users.php';
</script>
";

?>