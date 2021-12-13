<html>
    <body>
        <form action="" method="post">
        
            
        </form>
        <?php
        session_start();
        if(isset($_SESSION['user_name']))
        {
            echo "WELCOME<br>";
            echo $_SESSION['name'];
            echo $_SESSION['user_name'];
            ?>
             <a href="logout.php">logout</a>
             <a href="search.php">SEARCH</a>
             <?php
        }
            
            else{
echo "pls login";
header("Location:login.php");
            }
            ?>
           
          
          
        
        
        
        
    </body>
</html>