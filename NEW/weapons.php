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
        <title> Terrorism | Weapons </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="weapons.css" rel="stylesheet" type="text/css">
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
                <li><a href="statistics.html"><i class="fa fa-fw fa-bar-chart-o">Statistics</i></a></li>
                <li><a href="worstattacks.php"><i class="fa fa-fw fa-exclamation-circle">Worst Attacks</i></a></li>
                <li><a href="profile.php"><i class="fa fa-fw fa-user">User</i></a></li>
                <li><a href="admin.php"><i class="fa fa-fw fa-user-secret">Admin</i></a></li>
                <li><a href="report.php"><i class="fa fa-fw fa-line-chart">About</i></a></li>
                <li><a href="team.html"><i class="fa fa-gw fa-heart"> Team</i></a></li>
            </ul>
        </div>
        <div class="menu-bg" id="menu-bg"></div>
        <div class="search-box">
            <input class="search-txt" type="text" name="" placeholder="Type to search..">
            <a class="search-btn" href="">
                <i class="fa fa-fw fa-search"></i>
            </a>
        </div>
            <div class="infos">
                <h1>General Information</h1>
                <h4>Weapons</h4>
            </div>
            <div class="cat-wep">
                <a href="melee.php">Meele Weapons</a>
                <a href="pistols.php">Pistols</a>
                <a href="shotguns.php">Shotguns</a>
                <a href="rifles.php">Rifles</a>
                <a href="machines.php">Machine Guns</a>
                <a href="explosives.php">Explosives</a>
            </div>
            <div class='box1'>
                <div class='title'>Calibre</div>
                <div class="box-item">
                    <h2>What it is?</h2>
                    <p>Calibre means the diameter of round or cylindrical body, as of a bullet, a projectile, or a column.</p>
                    <h3>Common calibres:</h3>
                    <ul>
                    <p>5.56mm</p><br>
                    <p>7.62mm</p><br>
                    <p>7.65mm</p><br>
                    <p>9mm</p>
                    </ul>
                </div>
            </div>
            <div class='box2'>
                <div class="box-item"><img src="photos/purple2.jpg"></div>
            </div>
            <div class='box3'>
                <div class='title'>Cartridge</div>
                <div class="box-item">
                    <h2>What it is?</h2>
                    <p>Cartridge means a casing containing a charge and a bullet or shot for small arms or an explosive charge for blasting.</p>
                    <h3>Types of cartrige:</h3>
                    <ul>
                    <p>Parabellum </p><br>
                    <p>Tokarev </p><br>
                    <p>NATO </p><br>
                    <p>BGM </p>
                    </ul></div>
            </div>
            <div class='box4'>
                <div class='title'>Feed System</div>
                <div class="box-item">       
                    <h2>What it is?</h2>
                    <p>The feed system of a firearm represents represents the way we can put our ammunition in different storages.</p>
                    <h3>Types of feeding systems:</h3><br>
                    <ul>
                    <p>Detachable Box Magazine </p><br><br>
                    <p>Tubular Magazine </p><br>
                    <p>Internal Tube Magazine </p><br>
                    <p>Curved Magazine </p><br>
                    <p>STANAG Magazine </p><br>
                    <p>Stripped Cpp-Internal Magazine</p><br><br>
                    <p>Belt Fed</p><br>
                    <p>Round Belt</p><br>
                    <p>Non-Disintegrating Metal Belt</p><br><br>
                    <p>Manually Breech Loaded </p>
                    </ul>
                </div>
            </div>
            <div class='box5'>
                <div class="box-item"><img src="photos/imggg.jpg"></div>
            </div>
            <div class='box6'>
                <div class='title'>Warhead</div>
                <div class="box-item">
                    <h2>What it is?</h2>
                    <p>Warhead means the ignition device of an explosive charge.</p>
                    <h3>Types of warhead:</h3>
                    <ul>
                    <p>HEAT aka High Explosive Anti-Tank</p><br><br>
                    <p>Directed-Energy Blast Fragmentation </p><br><br>
                    <p>FRAG-HE High Explosive </p><br>
                    <p>High Explosive Annular Blast Fragmentation</p><br><br>
                    <p>Nuclear Weapon </p>
                    </ul>
                </div>
            </div>
            <div class='box7'>
                <div class='box-item'><img src="photos/arms.jpg"></div>
            </div>
            <div class='box8'>
                <div class='title'>Engine</div>
                <div class="box-item">
                <h2>What it is?</h2>
                <p>Engine means a mechanism or object that serves as an energy source.</p>
                <h3>Common engines:</h3>
                <ul>
                    <p>Solid Fuel Rocket</p><br>
                    <p>Infra-red Homing System</p><br>
                    <p>Liquid Propellant Rocket  </p>
                </ul>
                </div>
            </div>
            <div class='box9'>
                <div class='title'>Bombs</div>
                <div class="box-item">
                    <p>When it comes to bombing people are quite creative. That is how IED`s were created. Those are simple bombs made and used by unofficial or unauthorized forces.</p>
                </div>
            </div>
            <div class='box10'>
                <div class='title'>Detonation Methods</div>
                <div class="box-item">
                <h2>What it is?</h2>
                <p>Detonation is the result of a supersonic wave initiating a secondary explosion.</p>
                <h3>Common methods:</h3>
                <ul>
                    <p>Time Delay Fuse </p><br>
                    <p>Pyrotechnic Delay Fuze </p><br><br>
                    <p>Inertial Impact Fuse</p>
                </ul>
                </div>
            </div>
            <div class='box11'>
                <div class='box-item'><img src="photos/atom_mushroom.jfif"></div>
            </div>
            <div class='box12'>
                <div class='title'>Filling</div>
                <div class="box-item">
                <h2>What it is?</h2>
                <p>The filling represents the composition found in a bomb.The filling is found in IED`s and in official bombs.</p>
                <h3>Common explosives:</h3>
                <ul>
                    <p>Trinitrotoluene aka TNT </p><br>
                    <p>Semtex</p><br>
                    <p>Royal Demolition eXplosive aka RDX aka Cyclonite</p><br><br><br>
                    <p>Pentaerythritol tetranitrate aka PETN</p><br><br>
                    <p>C4 </p><br>
                    <p>Ammonium Nitrate</p><br>
                    <p>Dynamite</p>
                </ul>
                </div>
            </div>
            <div class='box13'>
                <div class='box-item'><img src="photos/gunsss.jpg"></div>
            </div>
            <div class='box14'>
                <div class='title'>Types of IED</div>
                <div class="box-item">
                <ul>
                    <p>Pipe Bombs</p><br>
                    <p>Cocktail Molotov aka Petrol Bomb</p><br><br>
                    <p>Fertilizer Truck Bomb</p>
                </ul>
                </div>
            </div>
            <div class='box15'>
                <div class='box-item'><img src="photos/dynamite1.jpg"></div>
            </div>
           
    </body>
</html>