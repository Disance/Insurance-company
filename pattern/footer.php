
<?php

 require_once 'include/connect.php';
?>
<?php
$footer = $pdo->prepare("SELECT * FROM `footer`");
$footer->execute();
$info=$footer->fetch(PDO::FETCH_OBJ);
?>


<footer>
    <div><img style="position: relative; top: 50px; left: 50px;" width="100px" src="<?php echo $info->logo ?>" alt=""></div>
    <div class="Contact"><h3><?php echo $info->contacth1 ?></h3>
    <p><?php echo $info->number1 ?></p>
    <p><?php echo $info->number2 ?></p>
    <p><?php echo $info->number3 ?></p>
<h3><?php echo $info->adressh1 ?></h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $info->city ?></p>
<p><?php echo $info->location ?></p>
</div>
<div><h3><?php echo $info->insurance ?></h3><br>
    <a href="/newspage/life.php"><p class="p-group"><?php echo $info->medicalinsurance ?></p></a><br>
    <a href="/forclient.php"><p class="p-group"><?php echo $info->businessinsurance ?></p></a><br>
    <a href="/newspage/casco.php"><p class="p-group"><?php echo $info->carinsurance ?></p></a><br>
    <a href="#"><p class="p-group"><?php echo $info->rules ?></p></a><br>
</div>
<div>
    <h3><?php echo $info->aboutcompanyh1 ?></h3><br>
    <a href="/aboutus.php"><p class="p-group"><?php echo $info->aboutus ?></p></a><br>
    <a href="/aboutus.php"><p class="p-group"><?php echo $info->reviews ?></p></a><br>
    <a href="/news.php"><p class="p-group"><?php echo $info->news ?></p></a><br>
</div>
<div>
    <h3><?php echo $info->socialh1 ?></h3><br>
    <a href="https://www.facebook.com/profile.php?id=100093063874662&mibextid=LQQJ4d"><p class="p-group"><?php echo $info->facebook ?></p></a><br>
    <a href="https://www.instagram.com/dordoiinsurance.kg/?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr"><p class="p-group"><?php echo $info->insagram ?></p></a><br>
    <a href="https://vk.com/id833327719"><p class="p-group"><?php echo $info->vk ?></p></a><br>
</div>
</footer>
<div class="footer-license">©2023 Dordoi insurance</div>