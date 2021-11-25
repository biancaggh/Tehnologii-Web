
<?php

$database_name = "weapons";
$con = mysqli_connect("localhost","root","",$database_name);
if($con){
    header("Content-Type: JSON");
    $sql= "select * from meele_weapons";
    $result = mysqli_query($con,$sql);
    if($result){
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row['id'];
            $response[$i]['type'] = $row['type'];
            $response[$i]['title'] = $row['title'];
            $response[$i]['blade_lenght'] = $row['blade_lenght'];
            $response[$i]['steel'] = $row['steel'];
            $response[$i]['handle'] = $row['handle'];
            $response[$i]['image'] = $row['image'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }

    $sql1= "select * from pistols";
    $result1 = mysqli_query($con,$sql1);
    if($result1){
        $j=0;
        while($row = mysqli_fetch_assoc($result1)){
            $response[$j]['id'] = $row['id'];
            $response[$j]['type'] = $row['type'];
            $response[$j]['title'] = $row['title'];
            $response[$j]['place'] = $row['place'];
            $response[$j]['calibre'] = $row['calibre'];
            $response[$j]['cartridge'] = $row['cartridge'];
            $response[$j]['barrel'] = $row['barrel'];
            $response[$j]['ef_range'] = $row['ef_range'];
            $response[$j]['feed'] = $row['feed'];
            $response[$j]['material'] = $row['material'];
            $response[$j]['image'] = $row['image'];
            $j++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }

    $sql2= "select * from shotguns";
    $result2 = mysqli_query($con,$sql2);
    if($result2){
        $h=0;
        while($row = mysqli_fetch_assoc($result2)){
            $response[$h]['id'] = $row['id'];
            $response[$h]['type'] = $row['type'];
            $response[$h]['title'] = $row['title'];
            $response[$h]['brand'] = $row['brand'];
            $response[$h]['place'] = $row['place'];
            $response[$h]['cartridge'] = $row['cartridge'];
            $response[$h]['barrel'] = $row['barrel'];
            $response[$h]['ef_range'] = $row['ef_range'];
            $response[$h]['feed'] = $row['feed'];
            $response[$h]['material'] = $row['material'];
            $response[$h]['image'] = $row['image'];
            $h++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }

    $sql3= "select * from rifles";
    $result3 = mysqli_query($con,$sql3);
    if($result3){
        $x=0;
        while($row = mysqli_fetch_assoc($result3)){
            $response[$x]['id'] = $row['id'];
            $response[$x]['type'] = $row['type'];
            $response[$x]['title'] = $row['title'];
            $response[$x]['place'] = $row['place'];
            $response[$x]['cartridge'] = $row['cartridge'];
            $response[$x]['barrel'] = $row['barrel'];
            $response[$x]['ef_range'] = $row['ef_range'];
            $response[$x]['feed'] = $row['feed'];
            $response[$x]['material'] = $row['material'];
            $response[$x]['image'] = $row['image'];
            $x++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }

    $sql4= "select * from machineguns";
    $result4 = mysqli_query($con,$sql4);
    if($result4){
        $y=0;
        while($row = mysqli_fetch_assoc($result4)){
            $response[$y]['id'] = $row['id'];
            $response[$y]['type'] = $row['type'];
            $response[$y]['title'] = $row['title'];
            $response[$y]['place'] = $row['place'];
            $response[$y]['cartridge'] = $row['cartridge'];
            $response[$y]['barrel'] = $row['barrel'];
            $response[$y]['ef_range'] = $row['ef_range'];
            $response[$y]['feed'] = $row['feed'];
            $response[$y]['material'] = $row['material'];
            $response[$y]['image'] = $row['image'];
            $y++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }

    $sql5= "select * from explosives";
    $result5 = mysqli_query($con,$sql5);
    if($result5){
        $z=0;
        while($row = mysqli_fetch_assoc($result5)){
            $response[$z]['id'] = $row['id'];
            $response[$z]['type'] = $row['type'];
            $response[$z]['title'] = $row['title'];
            $response[$z]['place'] = $row['place'];
            $response[$z]['warhead'] = $row['warhead'];
            $response[$z]['detonation'] = $row['detonation'];
            $response[$z]['diameter'] = $row['diameter'];
            $response[$z]['engine'] = $row['engine'];
            $response[$z]['ef_range'] = $row['ef_range'];
            $response[$z]['filling'] = $row['filling'];
            $response[$z]['feed'] = $row['feed'];
            $response[$z]['material'] = $row['material'];
            $response[$z]['image'] = $row['image'];
            $z++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }

    $sql6= "select * from antitank";
    $result6 = mysqli_query($con,$sql6);
    if($result6){
        $w=0;
        while($row = mysqli_fetch_assoc($result6)){
            $response[$w]['id'] = $row['id'];
            $response[$w]['type'] = $row['type'];
            $response[$w]['title'] = $row['title'];
            $response[$w]['place'] = $row['place'];
            $response[$w]['calibre'] = $row['calibre'];
            $response[$w]['cartridge'] = $row['cartridge'];
            $response[$w]['barrel'] = $row['barrel'];
            $response[$w]['ef_range'] = $row['ef_range'];
            $response[$w]['feed'] = $row['feed'];
            $response[$w]['material'] = $row['material'];
            $response[$w]['image'] = $row['image'];
            $w++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }

    $sql7= "select * from attacks";
    $result7 = mysqli_query($con,$sql7);
    if($result7){
        $w=0;
        while($row = mysqli_fetch_assoc($result7)){
            $response[$w]['id'] = $row['id'];
            $response[$w]['title'] = $row['title'];
            $response[$w]['place'] = $row['place'];
            $response[$w]['date'] = $row['date'];
            $response[$w]['story'] = $row['story'];
            $response[$w]['image'] = $row['image'];
            $w++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }

    $sql8= "select * from users";
    $result8 = mysqli_query($con,$sql8);
    if($result8){
        $w=0;
        while($row = mysqli_fetch_assoc($result8)){
            $response[$w]['id'] = $row['id'];
            $response[$w]['first_name'] = $row['first_name'];
            $response[$w]['last_name'] = $row['last_name'];
            $response[$w]['email'] = $row['email'];
            $response[$w]['username'] = $row['username'];
            $response[$w]['password'] = $row['password'];
            $response[$w]['image'] = $row['image'];
            $w++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}
else{
    echo "Database connection failed";
}

?>

