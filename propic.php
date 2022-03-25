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
                if(move_uploaded_file($uplFileName, $newFilePath)){
                    echo "upload successfully";
                   
                }else{
                    echo "upload failed";
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