<form action= "adminLogin.php" method = "post">
    username :<input type="text" name = "username">
    password :<input type="password" name = "password">
    <input type="submit">
</form>
<?php 
    $inUsername = $_POST["username"];
    $inPassword = $_POST["password"];
    $username = "admin";
    $password = "admin123";
           if($inUsername==$username && $inPassword==$password){
               echo "Congratulations you have logged in as admin";
               $secured == true;
               
           }
           else{
                echo "Stop Hacking this";
                $secured == false;
           }
?> 

