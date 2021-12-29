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
                color:black;
                text-align: center;
            }
            a:link {
                color: rgb(248, 245, 245);
            }
            a:visited {
            color: rgb(252, 80, 13);
            }
            table{
                font-size: 20px;
                color:white;
                border-color: orange;
            }
        </style>
        </head>
        <h1>YOUR DETAILS</h1>
   <h2> <a href="profile.php">profile</a>&nbsp;&nbsp;
    <a href="editprofile.php">edit profile</a>&nbsp;&nbsp;
    <a href="update.php">Update Last Donation</a></h2>

    <body>
<?php
$servername="localhost";
$root="myproject";
$pass="myproject123";
$db="myproject";

$con=mysqli_connect("$servername","$root","$pass","$db");

session_start();

if(isset($_SESSION['user_email']))
{
    $ser=$_SESSION['user_email'];
    $mob=$_SESSION['user_mob'];
    
    
    $sql="select * from tbl_user where  email='$ser' AND mobile='$mob'";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0)
    {
        
        ?>
        
        <table align= center  border=1>
<thead>
    <tr>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PLACE</th>
        <th>AGE</th>
        <th>MOBILE</th>
        <th>BLOOD GROUP</th>

    </tr>
</thead>
<tbody>
<?php
$result=mysqli_fetch_all($res, MYSQLI_ASSOC);
foreach($result as $row)
{
    ?>
    <tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['place'];?></td>
        <td><?php echo $row['age'];?></td>
        <td><?php echo $row['mobile'];?></td>
        <td><?php echo $row['blood'];?></td>
    </tr>
    
    <?php
}
    
?>
</tbody>

</table>


        <?php
    }


}
?>
    </body>
</html>