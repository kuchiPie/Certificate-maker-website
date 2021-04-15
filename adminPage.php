<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin login</title>
</head>

<body>
    <div class="container">
        <h1>Admin login</h1>
    <form action= "adminPage.php" method = "post">
    username :<input type="text" name = "username">
    password :<input type="password" name = "password">
    <input type="submit">
    </form>
    
    <?php 
        $inUsername = $_POST["username"];
        $inPassword = $_POST["password"];
        $username = "admin";
        $password = "admin123";
        $secured = false;
    
        
            if($inUsername==$username && $inPassword==$password){
                echo "Congratulations you have logged in as admin";
                
                $secured = true;
                
            }
            else{
                    echo "Stop Hacking this.";
            }

    ?> 
        
        <form action="upload.php?data=<?=$secured?>" method="post" enctype="multipart/form-data">
        Select certificate to upload:
        <input type="hidden" name="secured" value=<?php echo $secured?>>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
        </form>

    </div>
    
</body>

</html>