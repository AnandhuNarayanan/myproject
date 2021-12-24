<html>
<a href="profile.php"> profile</a>
    <body>
        <form action="" method ="post">
            ENTER PREVIOUS DONATED DATE<input type="date" name="date" >
            <input type="submit" value="UPDATE">
        </form>

<?php
$servername="localhost";
$root="myproject";
$pass="myproject123";
$db="myproject";

$con=mysqli_connect("$servername","$root","$pass","$db");

session_start();


if(isset($_SESSION['user_email']))
{
    if(isset($_POST['date']))
    {
        $d=$_POST['date'];
        $cd=date("Y/m/d");
    
    
        if(strtotime($d)<=strtotime($cd))
        {
          

            $id=$_SESSION['user_id'];
            $mob=$_SESSION['user_mob'];
            
            $sql="UPDATE `tbl_user` SET `donationdate`='$d' WHERE  `id`= '$id' AND `mobile` ='$mob'";
            if(mysqli_query($con,$sql))
           {
               echo "date inserted";
              header('Location:mydata.php');
              
           }
           else
           {
            echo"error";
           }
           
            
    }
    else{

        echo"cant enter future dates";
    
   
    }
    }
}

?>

    </body>
</html>