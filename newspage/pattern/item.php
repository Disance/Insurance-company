<?php

 require_once '../include/connect.php';
?>
<?php
$item = $pdo->prepare("SELECT * FROM `item`");
$item->execute();
$icon=$item->fetch(PDO::FETCH_OBJ);
?>



<div style="background-color: rgba(245, 245, 245, 0.596); padding-bottom: 20px;
padding-top: 30px;" class="item">
    <h3 style="background-color: white;  box-shadow: -1px 28px 51px -21px #000000;padding-bottom: 15px; padding-left: 10px;; width: 150px; border-radius: 37px;"><?php echo $icon->osago ?><img style="position: relative; top: 10px;" src="<?php echo $icon->osagoimg ?>" alt=""></h3>
    <h3 style=" box-shadow: -1px 28px 51px -21px #000000;background-color: white; height: 70px; position: relative; right: 30px;  padding-left: 20px; height: 70px ; width: 170px;border-radius: 37px;"><?php echo $icon->casco ?><img style="position: relative; left: 10px; width: 50px; top: 10px;" class="icons" src="<?php echo $icon->cascoimg ?>" alt=""></h3>
    <h3 style="box-shadow: -1px 28px 51px -21px #000000; background-color: white;padding-left: 10px; right: 20px; padding-top: 10px; position: relative; height: 70px; width: 200px; overflow: hidden; border-radius: 37px;"><?php echo $icon->Insurance ?> <br><img style="position: relative; left: 120px; top: -50px; " class="" src="<?php echo $icon->Insuranceimg ?>" alt=""></h3>
    <h3 style="box-shadow: -1px 28px 51px -21px #000000; background-color: white;padding-left: 10px; width: 200px; height: 70px; border-radius: 37px; position: relative; top: 25px; margin-top: -25px;"><?php echo $icon->home ?><img style="width: 50px; left: 20px; top: 15px; position: relative;" class="icons" src="<?php echo $icon->homeimg ?>" alt=""></h3>
    <h3 style=" box-shadow: -1px 28px 51px -21px #000000;background-color: white; height: 70px; position: relative;  padding-left: 20px; width: 220px;  border-radius: 37px;"><?php echo $icon->travel ?> <img style="position: relative; top: 20px; width: 50px;" class="icons" src="<?php echo $icon->travelimg ?>" alt=""> </h3>
</div>