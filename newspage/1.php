<?php

 require_once '../include/connect.php';
?>

<?php $articl = get_article_by_id($_GET['id']); ?>



<link rel="stylesheet" href="/css/forclient.css">

<div class="container">
    <?php
        
        include ('pattern/nav.php');
        ?>
<div style="text-align:center;">
<h1><?php echo $articl['h1']?></h1>
</div>
<div class="text">
<p><?php echo $articl['text']?></p>
</div>
        <?php
        
        include ('pattern/footer.php');
        ?>
    </div>
</div>