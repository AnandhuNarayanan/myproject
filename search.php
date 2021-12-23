<html>
<a href="profile.php">profile</a>
    <?php
    session_start();
    if(isset($_SESSION['user_name']))
    {

    
    ?>
    <body>
        <form action="" method="get">
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


include 'function.php';

if(isset($_GET['search']))
{
    $search=$_GET['search'];
    $key=$_GET['key'];


if(isset($_GET['search']))
{
    $ser="?search=".urlencode($_GET['search']) ."&key=".urlencode($_GET['key']);
    $raw=search_donar($_GET['search'],$_GET['key'],$_GET['sort']);
    var_dump($_GET['sort']);
    


   
?>


<table border=1>
    <thead>
    <thead>

<tr>
    <th><a href="<?= $ser ?>&sort=NAME">NAME</a></th>
    <th><a href="<?= $ser ?>&sort=EMAIL">EMAIL</a></th>
    <th><a href="<?= $ser ?>&sort=PLACE">PLACE</a></th>
    <th><a href="<?= $ser ?>&sort=AGE">AGE</a></th>
    <th><a href="<?= $ser ?>&sort=MOBILE">MOBILE</a></th>
    <th><a href="<?= $ser ?>&sort=BLOOD">BLOODGROUP</a></th>
</tr>

</thead>

<tbody>
<?php



foreach($raw as $row)
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
//}
    
?>
</table>
<?php

        }
    }



    

else
{
    echo "record not exist";





    
    
    
        header("Location:login.php");
    }


?>



    </body>
</html>