<html>
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
        <h1>CHANGE YOUR PASSWORD</h1>
<h2><a href="profile.php">profile</a></h2>
    <body>
        
<h3><form action="" method="post">
  OLD PASSWORD  <input type="password" name="opass" placeholder="enter old password"><br>
    NEW PASSWORD<input type="password" name="npass" placeholder="enter new password"><br>
   RE-ENTER NEW PASSWORD <input type="password" name="cpass" placeholder="confirm new password">
   <input type="submit" value="change">
</form><h3>


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
                        echo"error";
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