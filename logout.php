<html>
    <body>
        <form action ="" method="post">
            <input type="submit" name="logout" value="logout">
        </form>

<?php
session_start();
if(isset($_POST['logout']))
{
unset($_SESSION['user_name']);
session_destroy();
header("location:login.php");
}
?>
    </body>
</html>