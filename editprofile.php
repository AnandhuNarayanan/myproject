<html>
<a href="profile.php">profile</a>
<a href="change.php">change password</a>

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
            $mobile=$_SESSION['user_mob'];
            $oldname=$_SESSION['user_name'];
            $email=$_SESSION['user_email'];
            
        ?>
        <form action="" method="post">
        NAME<input type="text" name="name" placeholder="Enter your new name" required><br>
            <input type="submit" value="UPDATE">
        </form>
        
        <?php
        if(isset($_POST['name']))
        {

        $name=$_POST['name'];
        
        if($oldname==$name)
        {

            echo"old name and new name is same <br>";
            echo "$name<br>";
            echo "$oldname" ;
         }
        
        else
        {
            $sql="update  tbl_user SET name='$name' where mobile='$mobile'";
            //var_dump($sql);
            if(mysqli_query($con,$sql))
            {
                echo "record submitted successfully";
                $sql="select * from tbl_user where  email='$email' AND mobile='$mobile'";
                $res=mysqli_query($con,$sql);
                $_SESSION['user_name']=$name;
                $result=mysqli_fetch_array($res);
                //var_dump($result);
            }
            else
            {
                echo"error";
            }
           
     
            //echo "old name is $oldname";
         
           

        
        
        }
    }
      
        
    
   
    //var_dump($mobile);
}
    ?>
    </body>
</html>
