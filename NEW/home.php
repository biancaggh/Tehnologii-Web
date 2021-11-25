<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Terrorism | Home </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="home.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="menu.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://www.iconsdb.com/icons/preview/white/gun-5-xxl.png" type="image/x-icon">
</head>

<body>
    <div id="menu-bar">
        <div id="menu" onclick="onClickMenu()">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
        </div>
        <ul class="nav" id="nav" onclick="onClickBoth()">
            <li><a href="home.php"><i class="fa fa-fw fa-home">Home</i></a></li>
            <li><a href="weapons.php"><i class="fa fa-fw fa-bomb">Weapons</i></a></li>
            <li><a href="statistics.php"><i class="fa fa-fw fa-bar-chart-o">Statistics</i></a></li>
            <li><a href="worstattacks.php"><i class="fa fa-fw fa-exclamation-circle">Worst Attacks</i></a></li>
            <li><a href="profile.php"><i class="fa fa-fw fa-user">User</i></a></li>
            <li><a href="admin.php"><i class="fa fa-fw fa-user-secret">Admin</i></a></li>
            <li><a href="report.php"><i class="fa fa-fw fa-line-chart">About</i></a></li>
            <li><a href="team.php"><i class="fa fa-gw fa-heart"> Team</i></a></li>
        </ul>
    </div>
    <div class="menu-bg" id="menu-bg"></div>
    <div class="search-box">
        <input class="search-txt" type="text" name="" placeholder="Type to search..">
        <a class="search-btn" href="">
            <i class="fa fa-fw fa-search"></i>
        </a>
    </div>
    <div class="info-box">
        <div class="title">
            <h1>Terrorism</h1>
        </div>
    </div>
    <div class="info-box-2">
        <div class="title-2">
            <h1>Web</h1>
            <h1> Visualizer</h1>
        </div>
    </div>
  
</div>
</body>

</html>