<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="login.css" rel="stylesheet" type="text/css">
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
    <link rel="stylesheet" href="style.css" />
        <title> Terrorism | Log In </title>
    </head>
    
<body>
     <div class="container">   
    <form method="post" action="login.php">
        <div class="header">
            <h1>TeW</h1>
            <h3>Welcome Back</h3>
        </div>
        <?php include('errors.php'); ?>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Username">
        </div>
        <div class="input-group">
            <i class="fas fa-key"></i>
            <input type="password" name="password" placeholder="Password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
            Not yet a member? <a href="register.php">Sign up</a>
        </p>
        
    </form>
</div>
</body>

</html> 