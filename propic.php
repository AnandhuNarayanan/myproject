<html>
    <head>
        <body>
            <form action ="" method="POST" enctype="multipart/form-data">
                <input type="file" name="file" >
                <button type= "submit" name="submit">upload</button>
                
            </form>
            <?php
            include "connection.php";
            session_start();
            //var_dump($_FILES);
            //var_dump($_POST);
            $id= $_SESSION['user_id'];
            //echo $id;
            //exit;
            $s=0;
            if(isset($_POST['submit']))
            {
                $uplFile = $_FILES['file'];
                $fileMime = $uplFile['type'];
                $extn = '';
                if($fileMime == 'image/jpeg'){
                    $extn = '.jpg';
                }
                $newFileName = rand().$extn;
                $uploaddir = 'images/';
                $uplFileName = $uplFile['tmp_name'];
                $newFilePath = $uploaddir.$newFileName;
                if(move_uploaded_file($uplFileName, $newFilePath))
                {
                    if(isset($_SESSION['user_id']))
                    {
                   $s=1;
                    $qfbp= "insert into tbl_user (profile,status) values ('$newFileName','$s')";
                    if(mysqli_query($con,$qfbp))
                    {
                        echo "upload successfully";
                        header("Location:editprofile.php");
                    }
                }
                    else{
                        echo "upload failed";
                }
                }
            }
           
           //var_dump($uploadsize);
            
            else
            {
                echo" not upload";
            }
        
            
            ?>

        </body>
    </head>
</html>