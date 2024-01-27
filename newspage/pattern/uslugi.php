<?php

 require_once '../include/connect.php';
?>
<?php
$login=$_POST["login"];
$password=$_POST["password"];

$services = $pdo->prepare("SELECT * FROM `services-block`");
$services->execute();
$block=$services->fetch(PDO::FETCH_OBJ);
?>


<div class="uslugi-icons">
    <div style="box-shadow: 3px 6px 51px -18px #000000; border-radius: 10px; height: 250px;"><img style="padding: 10px 0px 5px 20px;" src="<?php echo $block->cascoimg ?>" alt=""><h3 style="margin: 10px 0px 5px 10px; width: 185px;"><?php echo $block->h2casco?></h3><p class="uslugi-icons-p"><?php echo $block->pcasco?></p></div>
    <div style="border-radius: 10px; width: 250px; height: 250px; box-shadow: 3px 6px 51px -18px #000000;"><img style="padding: 10px 0px 5px 20px;" src="<?php echo $block->lifeimg?>" alt=""><h3  style=" margin: 10px 0px 5px 10px; width: 90px;"><?php echo $block->h2life?></h3><p class="uslugi-icons-p"><?php echo $block->plife?></p></div>
    <div style="border-radius: 10px; width: 250px; height: 250px; box-shadow: 3px 6px 51px -18px #000000;"><img style="padding: 10px 0px 5px 20px;" src="<?php echo $block->imgtakaful?>" alt=""><h3  style=" margin: 10px 0px 5px 10px;width: 110px;"><?php echo $block->h2takaful?></h3><p class="uslugi-icons-p"><?php echo $block->ptakaful?></p></div>
</div>