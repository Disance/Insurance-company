<?php

require_once '../include/connect.php';
?>

<?php
$login=$_POST["login"];
$password=$_POST["password"];

$sql = $pdo->prepare("SELECT * FROM navbar");
$sql->execute();
$res=$sql->fetch(PDO::FETCH_ASSOC);
?>
<link rel="stylesheet" href="/css/style.css">

<header style=" height: 130px; background-color: rgba(226, 226, 226, 0.26);">
    <ul>
        <a href="/index.php"><img style=" margin-left: 10px;  top: 30px; position: relative; cursor: pointer;" width="132px" src="<?php echo $res["logo"] ?>" alt=""></a>
        <li><a href="/index.php"><?php echo $res["Home"] ?></a></li>
        <li><a href="/takaful.php"><?php echo $res["takaful"] ?></a></li>
        <li><a href="/forclient.php"><?php echo $res["client"] ?></a></li>
        <li><a href="/forparners.php"><?php echo $res["partners"] ?></a></li>
        <li><a href="/news.php"><?php echo $res["News"] ?></a></li>
        <li><a href="/aboutus.php"><?php echo $res["about"] ?></a></li>
        <li style=" margin-left: 40px;"><a style="background-color: #3A3285; color: white; border-radius: 4px;" href="/newspage/login.php"><?php echo $res["Personal-account"] ?></a></li>
    </ul>
</header>