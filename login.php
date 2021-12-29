<html>
<head>
        <style>
            body{
                background-image:url('images/image1.jpg') ;
            
            }
            h1{
               
                font-size: 70px;
                color:white;
                text-align: center;
            }
            h4{
                color: white;
                text-align: center;
            }
            h2{
                color: rgb(250, 113, 21);
                text-align: center;
            }
            a:link {
                color: rgb(248, 245, 245);
            }
            a:visited {
            color: red;
            }
        </style>
    </head>
    <h1>USER LOGIN PAGE</h1>
<h2><a href="index.html">HOME</a></h2>
    <body>
       <h4> <form action="" method="post">
        USERNAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="uname" placeholder="Enter your email"><br><br>
        PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pass" placeholder="Enter your password"><br>
        <br><input type="submit" value="LOGIN">
        
        </form></h4>
    
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
    $result= mysqli_fetch_all($res,MYSQLI_ASSOC);
    $_SESSION['user_id']=$result[0]['id'];
    $_SESSION['user_mob']=$result[0]['mobile'];
    $_SESSION['user_email']=$username;
    $_SESSION['user_name']=$result[0]['name'];

    if(isset($_SESSION['user_email']))
    {
    
    

   header("Location:profile.php");
    }
    
    


}
else{
   echo "inavalid id";
}
}

?>
</body>

</html>
