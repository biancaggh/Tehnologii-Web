<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "weapons";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        } 


   if(isset($_POST['add_wep']))
{    
    switch($_POST['weapon']){
        case 'Meele':
            $title = $_POST['title'];
            $type = $_POST['type'];
            $blade = $_POST['blade'];
            $steel = $_POST['steel'];
            $handle =$_POST['handle'];
            $image=$_POST['image'];
            $sql = "INSERT INTO meele_weapons (type,title,blade_lenght,steel,handle,image)
            VALUES ('$type','$title','$blade','$steel','$handle','$image')";
            break;
    
        case 'Pistols':
            $title = $_POST['title'];
            $type = $_POST['type'];
            $place=$_POST['place'];
            $calibre = $_POST['calibre'];
            $cartridge= $_POST['cartridge'];
            $barrel =$_POST['barrel'];
            $ef_range=$_POST['ef_range'];
            $feed=$_POST['feed'];
            $material=$_POST['material'];
            $image=$_POST['image'];
            $sql = "INSERT INTO pistols (type,title,place,calibre,cartridge,barrel,ef_range,feed,material,image)
            VALUES ('$type','$title','$place','$calibre','$cartridge','$barrel','$ef_range','$feed','$material','$image')";
            break;

        case 'Shotguns':
            $title = $_POST['title'];
            $type = $_POST['type'];
            $place=$_POST['place'];
            $cartridge= $_POST['cartridge'];
            $barrel =$_POST['barrel'];
            $ef_range=$_POST['ef_range'];
            $feed=$_POST['feed'];
            $material=$_POST['material'];
            $image=$_POST['image'];
            $sql = "INSERT INTO shotguns (type,title,place,cartridge,barrel,ef_range,feed,material,image)
                VALUES ('$type','$title','$place','$cartridge','$barrel','$ef_range','$feed','$material','$image')";
            break;
        
        case 'Rifles':
            $title = $_POST['title'];
            $type = $_POST['type'];
            $place=$_POST['place'];
            $cartridge= $_POST['cartridge'];
            $barrel =$_POST['barrel'];
            $ef_range=$_POST['ef_range'];
            $feed=$_POST['feed'];
            $material=$_POST['material'];
            $image=$_POST['image'];
            $sql = "INSERT INTO rifles (type,title,place,cartridge,barrel,ef_range,feed,material,image)
                VALUES ('$type','$title','$place','$cartridge','$barrel','$ef_range','$feed','$material','$image')";
            break;
     
        case 'Machines':
            $title = $_POST['title'];
            $type = $_POST['type'];
            $place=$_POST['place'];
            $cartridge= $_POST['cartridge'];
            $barrel =$_POST['barrel'];
            $ef_range=$_POST['ef_range'];
            $feed=$_POST['feed'];
            $material=$_POST['material'];
            $image=$_POST['image'];
            $sql = "INSERT INTO machineguns (type,title,place,cartridge,barrel,ef_range,feed,material,image)
                VALUES ('$type','$title','$place','$cartridge','$barrel','$ef_range','$feed','$material','$image')";
            break;

        case 'Explosives':
            $title = $_POST['title'];
            $type = $_POST['type'];
            $place=$_POST['place'];
            $warhead = $_POST['warhead'];
            $detonation = $_POST['detonation'];
            $diameter =$_POST['diameter'];
            $engine=$_POST['engine'];
            $ef_range=$_POST['ef_range'];
            $feed=$_POST['feed'];
            $filling=$_POST['filling'];
            $material=$_POST['material'];
            $image=$_POST['image'];
            $sql = "INSERT INTO explosives (type,title,place,warhead,detonation,diameter,engine,ef_range,filling,feed,material,image)
                VALUES ('$type','$title','$place','$warhead','$detonation','$diameter','$engine','$ef_range','$filling','$feed','$material','$image')";
            break;
        
        case 'AntiTank':
            $title = $_POST['title'];
            $type = $_POST['type'];
            $place=$_POST['place'];
            $calibre = $_POST['calibre'];
            $cartridge = $_POST['cartridge'];
            $barrel =$_POST['barrel'];
            $ef_range=$_POST['ef_range'];
            $feed=$_POST['feed'];
            $material=$_POST['material'];
            $image=$_POST['image'];
            $sql = "INSERT INTO antitank (type,title,place,calibre,cartridge,barrel,ef_range,feed,material,image)
                VALUES ('$type','$title','$place','$calibre','$cartridge','$barrel','$ef_range','$feed','$material','$image')";
            break;
        }
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
    
} 
    if(isset($_POST['attack'])){
        switch($_POST['atck']){
            case 'Attack':
                $title = $_POST['name'];
                $placeAt = $_POST['placeAt'];
                $date = $_POST['date'];
                $story = $_POST['story'];
                $image=$_POST['photo'];
                $sql = "INSERT INTO attacks (title,place,date,story,image)
                VALUES ('$title','$placeAt','$date','$story','$image')";
                break;
            }
            if (mysqli_query($conn, $sql)) {
                echo "New record has been added successfully !";
             } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
             }
             mysqli_close($conn);
 
    } 

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Terrorism | Admin Mode </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="admin.css" rel="stylesheet" type="text/css">
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
        <div class="container">
            <div class="banner-text">
                <h1>Admin</h1>
                <p>Mode</p>
            </div>
            <div class="btns">
                <button class="btn attack-btn">Add Attack</button><br>
                <button class="btn weapon-btn">Add Weapon</button>
            </div>
        </div>
        <div class="form-container" >
            <div class="weapon-form-wrapper modal">
                <div class="x-btn weapon-x">
                    &times;
                </div>
                <div class="form-header">
                    <h1>Add</h1>
                    <h3>New Weapons</h3>
                </div>
                <form class="form" method="post" action="admin.php">
                    <label for="arsenal">Choose a category of weapons:</label><br>
                    <select name="weapon" id="weapons_type" onchange="changeOptions(this)">
                        <option value="f0"></option>
                        <option value="Meele" name="Meele" >Meele Weapons</option>
                        <option value="Pistols">Pistols</option>
                        <option value="Shotguns">Shotguns</option>
                        <option value="Rifles" >Rifles</option>
                        <option value="Machines">Machine Guns</option>
                        <option value="Explosives">Explosives</option>
                        <option value="AntiTank">Anti-tank Weapons</option>
                    </select>
                    <div class="input-group">
                        <input type="text" id="title" name="title" placeholder="Weapon`s Name">
                    </div>
                    <div class="input-group">
                        <input type="text" id="blade_l" name="blade" placeholder="Blade Length">
                        <input type="text" id="steel" name="steel" placeholder="Steel">
                    </div>
                    <div class="input-group">
                        <input type="text" id="handle" name="handle" placeholder="Handle">
                        <input type="text" id="place_g" name="place" placeholder="Place of Origin">
                    </div>
                    <div class="input-group">
                        <input type="text" id="typo" name="type" placeholder="Type">
                        <input type="text" id="calibre_g" name="calibre" placeholder="Calibre">
                    </div>
                    <div class="input-group">
                        <input type="text" id="cartridge_g" name="cartridge" placeholder="Cartridge">
                        <input type="text" id="barrel_g" name="barrel" placeholder="Barrel Length">
                    </div>
                    <div class="input-group">
                        <input type="text" id="effect_g" name="ef_range" placeholder="Effective Range">
                        <input type="text" id="feed_g" name="feed" placeholder="Feeding System">
                    </div>
                    <div class="input-group">
                        <input type="text" id="mat_g" name="material" placeholder="Material">
                        <input type="text" id="warhead_at" name="warhead" placeholder="Warhead">
                    </div>
                    <div class="input-group">
                        <input type="text" id="diam_at" name="diameter" placeholder="Diameter">
                        <input type="text" id="engine_at" name="engine" placeholder="Engine">
                    </div>
                    <div class="input-group">
                        <input type="text" id="filling_ex" name="filling" placeholder="Filling">
                        <input type="text" id="det" name="detonation" placeholder="Detonation mechanism">
                    </div>
                    <div class="wrapper">
                        <div class="file-upload">
                        <input type="file" name="image" />
                        <i class="fa fa-arrow-up"></i>
                        </div>
                    </div>
                    <button type="submit" name="add_wep">Add</button>
                </form>
            </div>
            <div class="attack-form-wrapper modal" >
                <div class="x-btn attack-x">
                    &times;
                </div>
                <div class="form-header">
                    <h1>Add</h1>
                    <h3>New Attack</h3>
                </div>
                <form class="form" method="post" action="admin.php">
                <label for="arsenal">Choose a category of weapons:</label><br>
                    <select name="atck" id="weapons_type" onchange="changeOptions(this)">
                        <option value="f0"></option>
                        <option value="Attack">Attack</option>
                    </select>
                        <div class="input-group">
                            <input type="text" name="name" placeholder="Name of the Attack"/>
                        </div>
                        <div class="input-group">
                            <input type="text" name="placeAt" placeholder="Place"/>
                        </div>
                        <div class="input-group">
                            <input type="date" name="date" placeholder="Date"/>
                        </div>
                        <div class="input-group">
                            <input type="text" name="story" placeholder="Details"/>
                        </div>
                        <div class="wrapper">
                            <div class="file-upload">
                            <input type="file" name="photo"/>
                            <i class="fa fa-arrow-up"></i>
                            </div>
                        </div>
                        <button type="submit" name="attack">Add</a></button>
                </form>
            </div>
        </div>
        <script>
            const weaponModal = document.querySelector(".weapon-form-wrapper");
            const attackModal = document.querySelector(".attack-form-wrapper");
            const weaponBtn = document.querySelector(".weapon-btn");
            const attackBtn = document.querySelector(".attack-btn");
            const weaponX = document.querySelector(".weapon-x");
            const attackX = document.querySelector(".attack-x");
            const formContainer = document.querySelector(".form-container");

            weaponBtn.addEventListener('click', () => {
                weaponModal.classList.add("display");
                formContainer.classList.add('disable');
            });
            attackBtn.addEventListener('click', () => {
                attackModal.classList.add("display");
                formContainer.classList.add('disable');
            });
            weaponX.addEventListener('click', () => {
                weaponModal.classList.remove("display");
                formContainer.classList.remove('disable');
            });
            attackX.addEventListener('click', () => {
                attackModal.classList.remove("display");
                formContainer.classList.remove('disable');
            });
  
            var namew = document.getElementById('title');
            var category = document.getElementById('weapons_type');
            var blade__l = document.getElementById('blade_l');
            var steel = document.getElementById('steel');
            var handle =document.getElementById('handle');
            var placeorg= document.getElementById('place_g');
            var typo = document.getElementById('typo');
            var calibr = document.getElementById('calibre_g');
            var cartrid = document.getElementById('cartridge_g');
            var barr = document.getElementById('barrel_g');
            var rangee =document.getElementById('effect_g');
            var feed= document.getElementById('feed_g');
            var mater = document.getElementById('mat_g');
            var warh = document.getElementById('warhead_at');
            var diam = document.getElementById('diam_at');
            var engines = document.getElementById('engine_at');
            var fillIt = document.getElementById('filling_ex');
            var detonation = document.getElementById('det');



            category.onchange = function(){

                var  enableBladeL = false, enableSteel=false, enableHandle=false,
                enablePlace = false, enableType = false, enableCalibre=false, enableCartridge=false,
                enableBarrel = false, enableRange = false, enableFeeding=false, enableMaterial=false,
                enableWarhead = false, enableDiameter = false, enableEngine=false, enableFilling=false, enableDetonation = false; enableName=false;
                switch(category.options.selectedIndex){
                    case 0:
                        break;
                    case 1:
                        enableName=true;
                        enableBladeL = true;
                        enableSteel = true; 
                        enableHandle = true;
                        enableType = true;
                        
                        break;
                    case 2:
                        enableName=true;
                        enablePlace = true;
                        enableType = true;
                        enableCalibre=true; 
                        enableCartridge=true;
                        enableBarrel = true;
                        enableRange = true;
                        enableFeeding=true;
                        enableMaterial=true;
                        break;
                    case 3:
                        enableBladeL = false;
                        enableSteel=false; 
                        enableHandle=false;
                        enablePlace = true;
                        enableType = true;
                        enableCalibre=true; 
                        enableCartridge=true;
                        enableBarrel = true;
                        enableRange = true;
                        enableFeeding=true;
                        enableMaterial=true;
                        enableName=true;
                        break;
                    case 4:
                        enableBladeL = false;
                        enableSteel=false; 
                        enableHandle=false;
                        enablePlace = true;
                        enableType = true;
                        enableCalibre=true; 
                        enableCartridge=true;
                        enableBarrel = true;
                        enableRange = true;
                        enableFeeding=true;
                        enableMaterial=true;
                        enableName=true;
                        break;
                    case 5:
                        enableBladeL = false;
                        enableSteel=false; 
                        enableHandle=false;
                        enablePlace = true;
                        enableType = true;
                        enableCalibre=true; 
                        enableCartridge=true;
                        enableBarrel = true;
                        enableRange = true;
                        enableFeeding=true;
                        enableMaterial=true;
                        enableName-true;
                        break;
                    case 6:
                        enablePlace = true;
                        enableType = true;
                        enableMaterial=true;
                        enableDiameter = true; 
                        enableEngine=true;
                        enableFilling=true;
                        enableDetonation = true;
                        enableRange=true;
                        enableFeeding=true;
                        enableWarhead=true;
                        enableName-true;

                        break;
                    case 7:
                        enablePlace = true;
                        enableType = true;
                        enableCalibre=true;
                        enableBarrel = true;
                        enableRange = true;
                        enableFeeding=true;
                        enableMaterial=true;
                        enableWarhead = true;
                        enableDiameter = true; 
                        enableEngine=true;
                        enableName-true;
                        break;
                    default:
                        break;

                }

                blade__l.disabled = !enableBladeL;
                steel.disabled = !enableSteel;
                handle.disabled = !enableHandle;
                placeorg.disabled= !enablePlace;
                typo.disabled = !enableType;
                calibr.disabled = !enableCalibre;
                cartrid.disabled = !enableCartridge;
                barr.disabled = !enableBarrel;
                rangee.disabled = !enableRange;
                feed.disabled = !enableFeeding;
                mater.disabled = !enableMaterial;
                warh.disabled = !enableWarhead;
                diam.disabled = !enableDiameter;
                engines.disabled = !enableEngine;
                fillIt.disabled = !enableFilling;
                detonation.disabled = !enableDetonation;
                namew.disabled=!enableName;


            }

        </script>
    </body>
</html>