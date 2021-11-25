<?php
    session_start();
    $database_name = "weapons";
    $con = mysqli_connect("localhost","root","",$database_name);
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Terrorism | Worst Attacks </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="mystyle1.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="menu.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="https://www.iconsdb.com/icons/preview/white/gun-5-xxl.png" type="image/x-icon">
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

 
    <div class="tit">
        <h1> Worst attacks in history</h1>
    </div>
    <div class="sapt">
        <?php
           $query="SELECT * FROM attacks ORDER BY id ASC";
           $result = mysqli_query($con,$query);
           if(mysqli_num_rows($result) > 0) {
               while ($row = mysqli_fetch_array($result)) {
        ?>
        <div class="subtitlu">
            <form method="worstattacks.php?action=addid=<?php echo $row["id"];?>">
            <h2> <?php echo $row["title"];?> - <?php echo $row["date"];?> , <?php echo $row["place"];?> </h2>
        
        <p>
            <?php echo $row["story"];?>
        </p>
        <div class="row">
                <img src="<?php echo $row["image"];?>">
        </div>
       </form>
       <?php 
       }
    }
    ?>
    </div>



</body>
</html>