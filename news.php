<?php

 require_once 'include/connect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/news2.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
</head>
<body>
<div class="container">

<?php
        
        include ('pattern/nav.php');
        ?>

<h1>Страховой блог</h1>

<div class="blog1">

<?php
  $article = get_article_all();
  foreach($article as $article):?>
    <div style="margin-top:30px;" class="Article">
    <h2 id="value-group"><?php echo $article["h1"];  ?></h2>
<p id="value-group" class="p-text"><?php echo $string = substr($article ["text"] ,0,300); ?><a style="color:blue; font-size:30px;" href="newspage/1.php?id=<?php echo $article['id']?>">...</a></p><a href="newspage/1.php?id=<?php echo $article['id']?>"><button  class="more">Подробнее</button></a>
<p class="p-date"><?php echo date("d.m.Y", strtotime($article["date"])); ?></p>
</div>
    <?php endforeach ?>
</div>

<?php
        
        include ('pattern/footer.php');
        ?>
    </div>

    <script src="/js/main.js"></script>

    <style>
        .p-date{
            margin-top: 20px;
            margin-left: 15px;
        }
        .Article{
            border-radius: 10px;
        }
        .Article a{
            margin-top: auto;
            color: blue;
            text-decoration: none;
        }
    </style>
</body>
</html>