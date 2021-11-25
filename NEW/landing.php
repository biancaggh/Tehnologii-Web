<?php include('server.php')
?>
<?php
     
     $database_name = "weapons";
     $con = mysqli_connect("localhost","root","",$database_name);

    if(isset($_POST['login'])){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="landing.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="https://www.iconsdb.com/icons/preview/white/gun-5-xxl.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600|Montserrat:300,400,600"
      rel="stylesheet"
    />
        <title> Terrorism | Welcome </title>
    </head>
    
    <body>
        <nav>
            <div>
                <img src="photos/logoo.png" id="logo" alt="TeW">
            </div>
        </nav>
        <div class="container">
            <div class="banner-text">
                <h1>TeW</h1>
                <p>Learn more</p>
            </div>
            <div class="btns">
                <button class="btn login-btn" name="login"><a href="login.php">Login</a></button>
                <button class="btn signup-btn" name="signin"><a href="register.php">Sign up</a></button>
            </div>
        </div>
        
    </body>

</html> 