<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="register.css" rel="stylesheet" type="text/css">
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
        <title> Terrorism | Sign In </title>
    </head>
    <body>
        <div class="container">
        <form method="post" action="register.php">
            <div class="header">
                <h1>TeW</h1>
                <h3>Join Us</h3>
            </div>
            <?php include('errors.php'); ?>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="first_name" value="<?php echo $first_name;?>" placeholder="First Name"/>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="last_name" value="<?php echo $last_name;?>" placeholder="Last Name"/>
            </div>
            <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email">
            </div>
            <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
            </div>
            <div class="input-group">
            <i class="fas fa-key"></i>
            <input type="password" name="password_1" placeholder="Password">
            </div>
            <div class="input-group">
            <i class="fas fa-key"></i>
            <input type="password" name="password_2" placeholder="Confirm Password">
            </div>
            <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
            <div class="wrapper">
                <div class="file-upload">
                    <input type="file" name="image" />
                    <i class="fa fa-arrow-up"></i>
                                
                </div>
            </div>
            <p>
                Already a member? <a href="login.php">Log in</a>
            </p>
        </form>
        </div>
</body>

</html> 