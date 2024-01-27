<?php

 require_once 'include/connect.php';
?>
<?php
$services = $pdo->prepare("SELECT * FROM `services-block`");
$services->execute();
$block=$services->fetch(PDO::FETCH_OBJ);
?>


<div class="uslugi-icons">
    <div class="services"><img class="img" src="<?php echo $block->cascoimg ?>" alt=""><a href="newspage/support.php"><h3><?php echo $block->h2casco?></h3></a><p class="uslugi-icons-p"><?php echo $block->pcasco?></p></div>
    <div class="services"><img class="img" src="<?php echo $block->lifeimg?>" alt=""><a href="/newspage/life.php"><h3><?php echo $block->h2life?></h3></a><p class="uslugi-icons-p"><?php echo $block->plife?></p></div>
    <div class="services"><img class="img" src="<?php echo $block->imgtakaful?>" alt=""><a href="/takaful.php"><h3><?php echo $block->h2takaful?></h3></a><p class="uslugi-icons-p"><?php echo $block->ptakaful?></p></div>
</div>

<style>
    .uslugi-icons h3{
        text-align: center;
        margin: 10px 0px 5px 0px;
        box-sizing: border-box;
    }
    .uslugi-icons{
        margin-top: 40px;
        display: grid;
        grid-template-columns: 33% 33% 33%;
    }
    .uslugi-icons-p{
        margin-top: 10px;
        font-weight: normal;
    }
    .services{
        box-shadow: 3px 6px 51px -35px #000000; border-radius: 10px; width: 310px; height: 300px;
    }
    .img{
        margin: 40px 0px 5px 37.5%;
    }
</style>