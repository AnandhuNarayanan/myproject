<html>
    <head>
<style>
            body
            {
                background-image:url('images/image1.jpg') ;
                
            
            }
           
            
            h1{
                
                font-size: 70px;
                color:white;
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
    <body>
        <h1>USER REGISTRATION PAGE</h1>
       <h3> <form action="" method ="post">
            NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="name" placeholder="Enter your Name"><br>
            EMAIL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="email" placeholder="Enter your Email"><br>
            PLACE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="place" placeholder="Enter your Place"><br>
            AGE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="age" placeholder="Enter your Age"><br>
            MOBILE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="mobile" placeholder="Enter your Mobile Number"><br>
            <label for ="blood">SELECT BLOOD GROUP</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
            NEW PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pass" placeholder="Enter a Password"><br>
            CONFIRM PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="cpass" placeholder="Confirm password"><br>
           <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="REGISTER">
        </form></h3>
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