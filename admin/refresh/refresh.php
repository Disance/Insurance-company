<?php
    $user="root";
    $password="";
    $host="localhost";
    $db="database";
    $dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
    $pdo=new PDO($dbh,$user,$password);





$onlinesagoh1 = $_POST["onlinesagoh1"];
$onlinesagop = $_POST["onlinesagop"];
$onlinesagobutton = $_POST["onlinesagobutton"];

$row = "UPDATE `OnlineSago` SET h1=:h1,p=:p,button=:button";
$query=$pdo->prepare($row);
$query->execute(["h1"=>$onlinesagoh1,"p"=>$onlinesagop,"button"=>$onlinesagobutton]);



$OurServicesh1 = $_POST["OurServicesh1"];
$OurServicesp = $_POST["OurServicesp"];

$row = "UPDATE `our services` SET h1=:h1,p=:p";
$query=$pdo->prepare($row);
$query->execute(["h1"=>$OurServicesh1,"p"=>$OurServicesp]);

$firstblockh1 = $_POST["firstblockh1"];
$firstblockp = $_POST["firstblockp"];

$secondblockh1 = $_POST["secondblockh1"];
$secondblockp = $_POST["secondblockp"];

$thirdblockh1 = $_POST["thirdblockh1"];
$thirdblockp = $_POST["thirdblockp"];

$row = "UPDATE `services-block` SET h2casco=:h2casco,pcasco=:pcasco,h2life=:h2life,plife=:plife,h2takaful=:h2takaful,ptakaful=:ptakaful";
$query=$pdo->prepare($row);
$query->execute(["h2casco"=>$firstblockh1,"pcasco"=>$firstblockp,"h2life"=>$secondblockh1,"plife"=>$secondblockp,"h2takaful"=>$thirdblockh1,"ptakaful"=>$thirdblockp]);

$cascoonlineh1 = $_POST["cascoonlineh1"];
$cascoonlinep = $_POST["cascoonlinep"];
$cascoonlinebutton = $_POST["cascoonlinebutton"];

$row = "UPDATE `Casco Online` SET h1=:h1,p=:p,button=:button";
$query=$pdo->prepare($row);
$query->execute(["h1"=>$cascoonlineh1,"p"=>$cascoonlinep,"button"=>$onlinesagobutton]);
echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/admin-index.php">';

$homeh1 = $_POST["homeh1"];
$homep = $_POST["homep"];
$homebutton = $_POST["homebutton"];

$row = "UPDATE `Property` SET h1=:h1,p=:p,button=:button";
$query=$pdo->prepare($row);
$query->execute(["h1"=>$homeh1,"p"=>$homep,"button"=>$homebutton]);
echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/admin-index.php">';

?>