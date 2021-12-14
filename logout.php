

<?php
$servername="localhost";
$root="myproject";
$pass="myproject123";
$db="myproject";

$con=mysqli_connect("$servername","$root","$pass","$db");
session_start();
if(isset($_POST['logout']))
{
unset($_SESSION['user_name']);
session_destroy();
header("location:index.html");
}
?>
