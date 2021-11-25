<!DOCTYPE html>
<html lang="en">

<head>
    <title> Terrorism | Statistics </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="statistics.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="menu.js"></script>
    <!-- <script type="text/javascript" src="statistics.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://www.iconsdb.com/icons/preview/white/gun-5-xxl.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
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
    <div class="title">
        <h1>Statistics</h1>
    </div>
    <div class="container">
        <div class="btns">
            <button class="btn filters-btn">Advanced Search</button>
        </div>
        <div class="form-container">
            <div class="filters-form-wrapper modal">
                <div class="x-btn filters-x">
                    &times;
                </div>
                <div class="form-header">
                    <h1>Search accidents</h1>
                </div>
                <form class="form">
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username"/>
                    </div>
                    <button type="button">Search</button>
                </form>
            </div>

        </div>
    </div>
    <script src="statistics.js"></script>
</body>

</html>