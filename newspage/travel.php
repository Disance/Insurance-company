
<?php

 require_once '../include/connect.php';
?>
<?php
$travel = $pdo->prepare("SELECT * FROM `travel`");
$travel->execute();
$trave=$travel->fetch(PDO::FETCH_OBJ);
?>

<title>Travel</title>

<link rel="stylesheet" href="/css/text.css">

<div class="container">

<?php
        
        include ('pattern/nav.php');
        ?>
<div class="text">
<p><?php echo $trave->p ?></p>
</div>

<?php
        
        include ('pattern/footer.php');
        ?>

</div>