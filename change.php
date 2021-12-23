<html>
<a href="profile.php">profile</a>
    <body>
<form action="" method="post">
  OLD PASSWORD  <input type="password" name="opass" placeholder="enter old password"><br>
    NEW PASSWORD<input type="password" name="npass" placeholder="enter new password"><br>
   RE-ENTER NEW PASSWORD <input type="password" name="cpass" placeholder="confirm new password">
   <input type="submit" value="change">
</form>


        <?php
        $servername="localhost";
        $root="myproject";
        $pass="myproject123";
        $db="myproject";
        
        $con=mysqli_connect("$servername","$root","$pass","$db");
        session_start();
        if($_SESSION['user_email'])
        {
            $mobile=$_SESSION['user_mob'];
           // var_dump($mobile);
           $email=$_SESSION['user_email'];
           $sql="select password from tbl_user where email='$email' AND mobile='$mobile'";
           $res=mysqli_query($con,$sql);
           
            $result=mysqli_fetch_array($res);
            print_r($result['password']);

            $old=$_POST['opass'];

            if($old==$result['password'])
            {
                $npass=$_POST['npass'];
                $cpass=$_POST['cpass'];
                if($cpass==$npass)
                {
                    $sql="update tbl_user SET password='$npass' where email='$email' AND mobile='$mobile'";
                    if(mysqli_query($con,$sql))
                    {
                        echo "password updated successfully";
                    }
                    else
                    {
                        echo"cheeti pooi";
                    }
                }
                
            }
            else
            {
                echo"errror";
            }
           
        }
        ?>
    </body>
</html>