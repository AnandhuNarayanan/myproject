<html>
    <body>
        <form action="" method="post">
            <label for="search">SELECT A GROUP</label>
            <select name= "search" id="search">
<option value="A+ve" >A+ve</option>
<option value="B+ve" >B+ve</option>
<option value="AB+ve" >AB+ve</option>
<option value="O+ve" >O+ve</option>
<option value="A-ve" >A-ve</option>
<option value="AB-ve" >AB-ve</option>
<option value="B-ve" >B-ve</option>
<option value="O-ve" >O-ve</option>


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

$search=$_POST['search'];
$key=$_POST['key'];

$sql="select * from tbl_reg where blood='$search'"; 
$res=mysqli_query($con,$sql);
if(isset($_POST))

?>



    </body>
</html>