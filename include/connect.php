<?php
    $user="root";
    $password="";
    $host="localhost";
    $db="database";
    $dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
    $pdo=new PDO($dbh,$user,$password);


function get_article_all(){
    global $pdo;
    $article = $pdo->query("SELECT * FROM `news`");
    return $article;
}

function get_article_by_id($id){
    global $pdo;
    $article = $pdo->query("SELECT * FROM `news` WHERE id = $id");
    foreach ($article as $articl){
        return $articl;
    }
}