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
            table{
                font-size: 20px;
                color:white;
                border-color: orange;
            }
        </style>
        </head>
        <h1> SEARCH DONORS</h1>
<h2><a href="profile.php">profile</a><h2>
    <?php
    session_start();
    if(isset($_SESSION['user_name']))
    {

    
    ?>
    <body>
       <h3> <form action="" method="get">
            <label for="search">SELECT A GROUP</label>
            <select name= "search" id="search">
<option value="blood" >BLOODGROUP</option>>
<option value="place" >PLACE</option>

</select>
<input type="text" name= "key" placeholder="search">
<input type="submit" value="SEARCH">

        </form></h3>
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
  //  var_dump($_GET['sort']);
    


   
?>


<table align= center border=1>
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