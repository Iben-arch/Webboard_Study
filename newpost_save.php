<?php
    $cat_id = $_POST['category'];
    $topic = $_POST['topic'];
    $comet = $_POST['comment'];
    session_start();
    $user_id = $_SESSION['user_id'];

    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    $sql = "INSERT INTO post (title, content, post_date, cat_id, user_id) 
    VALUES('$topic', '$comet', NOW() , '$cat_id', '$user_id')";
    $conn->exec($sql);
    $conn = null;
    header("location:index.php");
    die();
?>