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
                color: black;
                text-align: center;
            }
            h2{
                color:black;
                text-align: center;
            }
            h3{
                color:white;
                text-align: center;
            }
            a:link {
                color: rgb(248, 245, 245);
            }
            a:visited {
            color: rgb(252, 80, 13);
            }
        </style>
        </head>
        <h1>UPDATE LAST DONATED DETAILS</h1>
<h2><a href="profile.php"> profile</a></h2>
    <body>
        <h3><form action="" method ="post">
            ENTER PREVIOUS DONATED DATE<input type="date" name="date" >
            <input type="submit" value="UPDATE">
        </form></h3>

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