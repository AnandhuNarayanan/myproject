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
                color:white;
                text-align: center;
            }
        </style>
        </head>
    <body>
        <h1></h1>
        <form action="" method="post">
        <input type="submit" name="logout" value="LOGOUT">
        <input type="submit" name="pro" value="PROFILE">
        <input type="submit" name="search" value="SEARCH">
        
            
        </form>
        <?php
        
        session_start();
        if(isset($_SESSION['user_email']))
        {
            ?>
           <h1> <?php echo "WELCOME  ";
            echo $_SESSION['user_name'];?></h1>
            <h2><?php echo "<br>";
            echo "YOUR MOBILE NUMBER is  ";
            echo $_SESSION['user_mob'];
            echo "<br>";
            echo "YOUR EMAIL ID is  ";
            echo $_SESSION['user_email'];
            echo "<br>";
           
            ?></h2>
            
             
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