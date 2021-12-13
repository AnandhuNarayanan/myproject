<html>
    <body>
        <form action="" method="post">
        USERNAME<input type="text" name="uname" placeholder="Enter your email"><br>
        PASSWORD<input type="password" name="pass" placeholder="Enter your password"><br>
        <input type="submit" value="LOGIN">
        </form>
    </body>
<?php
$servername="localhost";
$root="myproject";
$pass="myproject123";
$db="myproject";
if(isset($_POST['uname']))
{
$username=$_POST['uname'];
$pswd=$_POST['pass'];

$con=mysqli_connect("$servername","$root","$pass","$db");

session_start();



$sql="select * from tbl_user where email='$username' AND password='$pswd'";
$res= mysqli_query($con,$sql);
if(mysqli_num_rows($res))
{
    $result= mysqli_fetch_all($res);
    $_SESSION['user_name']=$username;
    if(isset($_SESSION['user_name']))
    {
    
    $_SESSION['name']=$result[0]['mobile'];

   header("Location:profile.php");
    }
    
    


}
else{
   echo "inavalid id";
}
}

?>
</html>
