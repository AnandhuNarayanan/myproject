<html>
    <body>
        <form action="" method ="post">
            NAME<input type="text" name="name" placeholder="Enter your Name"><br>
            EMAIL<input type="text" name="email" placeholder="Enter your Email"><br>
            PLACE<input type="text" name="place" placeholder="Enter your Place"><br>
            AGE<input type="text" name="age" placeholder="Enter your Age"><br>
            MOBILE <input type="text" name="mobile" placeholder="Enter your Mobile Number"><br>
            <label for ="blood">SELECT BLOOD GROUP</label>
            <select name="blood" id="blood" placeholder="BLOODGROUP">
                <option value="A+ve">A+Ve</option>
                <option value="B+ve">B+Ve</option>
                <option value="O+ve">O+Ve</option>
                <option value="AB+ve">AB+Ve</option>
                <option value="A-ve">A-Ve</option>
                <option value="B-ve">B-Ve</option>
                <option value="O-ve">O-Ve</option>
                <option value="AB-ve">AB-Ve</option>
          </select><br>
            NEW PASSWORD<input type="password" name="pass" placeholder="Enter a Password"><br>
            CONFIRM PASSWORD<input type="password" name="cpass" placeholder="Confirm password"><br>
            <input type="submit" value="REGISTER">
        </form>
    </body>
    <?php
$servername="localhost";
$root="myproject";
$pass="myproject123";
$db="myproject";

$con=mysqli_connect("$servername","$root","$pass","$db");

if(isset($_POST['name']))
{
$name =$_POST['name'];
$email =$_POST['email'];
$place =$_POST['place'];
$age=$_POST['age'];
$mobile=$_POST['mobile'];
$blood=$_POST['blood'];
$password=$_POST['pass'];
$cpass=$_POST['cpass'];
//var_dump($password);
//var_dump($cpass);
if($_POST['pass']==$cpass)
{


$sql="insert into tbl_user (name,email,place,age,mobile,blood,password) values ('$name','$email','$place','$age','$mobile','$blood','$password')";

//var_dump($res);
if(mysqli_query($con,$sql))
{
echo " registration succesfull";
header("Location:login.php");
}
else
{
    echo "registration not successfull";
}
}
else
{
    echo "password you given is dismatch";
}
}

    ?>
</html>