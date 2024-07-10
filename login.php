<?php
session_start();
require 'funtion.php';

if ( isset($_SESSION["login"])) {
    header("Location: indexlogin.php");
    exit;
}

if (isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

   $result= mysqli_query($apaaja,"SELECT * FROM user WHERE username = '$username'");

    
    if(mysqli_num_rows($result) == 1){

       
         $row = mysqli_fetch_assoc($result);
        if ($password == $row["password"]) {
          
            $_SESSION["login"] = true;
         


            header("Location: indexlogin.php");
            exit;
        }
    }   
$error = true;

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css?" <?php echo time();?>>
</head>
<body background="245.jpg">
    

    

    <?php if (isset($error)): ?>
        <script>
                alert('Password atau Username Salah');
                document.location.href = 'login.php';
        </script>"
    <?php endif;?>
    <form class="box" action="" method="post" autocomplete="off">
        <h1>LOGIN</h1>
 
        <label for="username">Username :</label>
            <input type="text" name="username" id="username" placeholder="Username">
        
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" placeholder="Password">
      
            <input type="checkbox" name="remember" id="rememer">
            <label  for="rememer">Remember me</label>
        
            <input type="submit" name="login" value="Login">
      
    <p>Belum mempunyai akun?</p>
    <a href="regist.php">Register</a>
    </form>
</body>
</html>
