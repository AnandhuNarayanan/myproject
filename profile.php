<html>
    <body>
        <form action="" method="post">
        <input type="submit" name="logout" value="LOGOUT">
        <input type="submit" name="pro" value="PROFILE">
        <input type="submit" name="search" value="SEARCH">
            
        </form>
        <?php
        
        session_start();
        if(isset($_SESSION['user_email']))
        {
            echo "WELCOME";
            echo $_SESSION['user_name'];
            echo "<br>";
            echo "YOUR MOBILE NUMBER is";
            echo $_SESSION['user_mob'];
            echo "<br>";
            echo "YOUR EMAIL ID is";
            echo $_SESSION['user_email'];
            echo "<br>";
            ?>
            
             
             <?php
//<a href="logout.php">logout</a>
        }
            
            else{
echo "pls login";
header("Location:login.php");
            }
            if(isset($_POST['logout']))
            {
                unset($_SESSION['user_name']);
                session_destroy();
                header("location:index.html");
                    //header("Location:logout.php");
            }
            
           if(isset($_POST['pro']))
           {
header("Location:mydata.php");
           }
          if(isset($_POST['search']))
          {
              header("Location:search.php");
          }
           ?>
        
        
        
        
    </body>
</html>