<?php


function connection()
{
$servername="localhost";
$root="myproject";
$pass="myproject123";
$db="myproject";

$con=mysqli_connect("$servername","$root","$pass","$db");
if(!$con)
{
    echo "connection error";
}
else
{
    
    echo "connection successfull";
}
}


?>
