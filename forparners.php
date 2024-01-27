<?php

 require_once 'include/connect.php';
?>
<?php
$forpartner = $pdo->prepare("SELECT * FROM `forpartnerpage`");
$forpartner->execute();
$partner=$forpartner->fetch(PDO::FETCH_OBJ);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/text.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For partners</title>
</head>
<body>
    <div class="container">
    <?php
        
        include ('pattern/nav.php');
        ?>
        <div class="text">

<p>
<?php echo $partner->p ?>
</p>

</div>
        <?php
        
        include ('pattern/footer.php');
        ?>
    </div>
    
</body>
</html>