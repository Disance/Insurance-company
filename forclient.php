<?php

 require_once 'include/connect.php';
?>
<?php
$login=$_POST["login"];
$password=$_POST["password"];

$forclient = $pdo->prepare("SELECT * FROM `forclientpage`");
$forclient->execute();
$client=$forclient->fetch(PDO::FETCH_OBJ);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/text.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Client</title>
</head>
<body>
    <div class="container">
    <?php
        
        include ('pattern/nav.php');
        ?>
<div class="text">
<p style="padding-bottom: 30px;">
<?php echo $client->p?>
</p>
</div>
        <?php
        
        include ('pattern/footer.php');
        ?>
    </div>

</body>
</html>