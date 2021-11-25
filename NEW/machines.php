<?php
    session_start();
    $database_name = "weapons";
    $con = mysqli_connect("localhost","root","",$database_name);

    $output="";

    if(isset($_POST['search'])){
        $searchq = $_POST['search'];
        $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

        $query = mysqli_query($con,"SELECT * FROM machineguns WHERE title LIKE '%$searchq%' OR type LIKE '%$searchq%' OR place LIKE '%$searchq%' OR  cartridge LIKE '%$searchq%' OR barrel LIKE '%$searchq%' OR ef_range LIKE '%$searchq%' OR feed LIKE '%$searchq%' OR material LIKE '%$searchq%'"); 
        $count = mysqli_num_rows($query);

        if($count == 0){
            $output = 'There is no such thing...';
        }
        else{
            while($row= mysqli_fetch_array($query)){
                $stype=$row['type'];
                $splace=$row['place'];
                $sid=$row['id'];
                $stitle=$row['title'];
                
                

                $output .='<div>'.$stitle.'</div>';
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Terrorism | Machine Guns </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="machines.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="https://www.iconsdb.com/icons/preview/white/gun-5-xxl.png" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <script type="text/javascript" src="menu.js"></script>
        <script type="text/javascript" src="filters.js"></script>
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
            <form action="machines.php" method="post">
            <input class="search-txt" type="text" name="search" placeholder="Type to search..">
            <a class="search-btn" type="submit" href="">
                <i class="fa fa-fw fa-search"></i>
            </a>
            </form>
        </div>
        
            <div class="infos">
                <h1>Machine</h1>
                <h4>Guns</h4>
            </div>
            <div class="result">
            <a href=""><?php print("$output");?></a>
        </div>
            <div class="container">
                <?php
                    $query = "SELECT * FROM machineguns ORDER BY id ASC ";
                    $result = mysqli_query($con,$query);
                    if(mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            if($row["id"]%3==0){
                            ?>
                            <div class="weapon">
                            
                                <form method="post" action="machines.php?action=add&id=<?php echo $row["id"]; ?>">
                                <?php
                                ?>
                                    <div class="machine">
                                        <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                        <a href="machineg.php?ID=<?php echo $row["id"]; ?>" class="text-info"><?php echo $row["title"]; ?></a>
                                    </div>
                                </form>
                            </div>
                            <?php
                              }
                              else if($row["id"]%3==1){
                            ?>
                            <div class="weapon1">
                            
                            <form method="post" action="machines.php?action=add&id=<?php echo $row["id"]; ?>">
                            <?php
                            ?>
                                <div class="machine1">
                                    <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                    <a href="machineg.php?ID=<?php echo $row["id"]; ?>" class="text-info"><?php echo $row["title"]; ?></a>
                                </div>
                            </form>
                        </div>
                        <?php
                              }else {
                            ?>
                            <div class="weapon">
                            
                                <form method="post" action="machines.php?action=add&id=<?php echo $row["id"]; ?>">
                                <?php
                                ?>
                                    <div class="machine2">
                                        <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                        <a href="machineg.php?ID=<?php echo $row["id"]; ?>" class="text-info"><?php echo $row["title"]; ?></a>
                                    </div>
                                </form>
                            </div>
                            <?php
                            }
                        }
                    }
                ?>
            </div>
            
        
        <audio id="song">
            <source src="music/LORN-ANVIL.mp3" type="audio/mpeg">
        </audio>
            
    </body>
</html>