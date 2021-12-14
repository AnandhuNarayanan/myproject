<html>
<a href="profile.php">profile</a>
    <?php
    session_start();
    if(isset($_SESSION['user_name']))
    {

    
    ?>
    <body>
        <form action="" method="post">
            <label for="search">SELECT A GROUP</label>
            <select name= "search" id="search">
<option value="blood" >BLOODGROUP</option>
<option value="place" >PLACE</option>
<option value="mobile" >MOBILE</option>


</select>
<input type="text" name= "key" placeholder="search">
<input type="submit" value="SEARCH">
        </form>
<?php
$servername="localhost";
$root="myproject";
$pass="myproject123";
$db="myproject";

$con=mysqli_connect("$servername","$root","$pass","$db");

if(isset($_POST['search']))
{

$search=$_POST['search'];
$key=$_POST['key'];

if($search=="blood")
{

$sql="select * from tbl_user where blood='$key'"; 
$res=mysqli_query($con,$sql);
}
elseif($search=="place")
{
$sql="select * from tbl_user where place='$key'"; 
$res=mysqli_query($con,$sql);
}
else{
    $sql="select * from tbl_user where mobile='$key'"; 
$res=mysqli_query($con,$sql);
}

?>
<table border=1>
    <thead>
<tr>
    <th>name</th>
    <th>email</th>
    <th>place</th>
    <th>age</th>
    <th>mobile</th>
    <th>bloodgroup</th>
</tr>

    </thead>
    <tbody>

<?php
$result=mysqli_fetch_all($res,MYSQLI_ASSOC);
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
        <br>
    </tr>
    <?php
    }
}
    ?>
    </tbody>

</table>
  <?php


}

else
{
    echo "record not exist";





    
    
    
        header("Location:login.php");
    }

?>



    </body>
</html>