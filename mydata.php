<html>
    <a href="profile.php">profile</a>
    <body>
<?php
$servername="localhost";
$root="myproject";
$pass="myproject123";
$db="myproject";

/* TEST */

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
        <table border=1>
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