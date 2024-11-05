<?php
    session_start();
    $category = $_POST['category'];

    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    
    $sql = "SELECT name From category WHERE name = '$category'";
    $count = $conn->query($sql)->fetchColumn();
    if ($count == 0){
        $sql = "INSERT into category (name) values ('$category')";
        $conn->exec($sql);
        $_SESSION['cat_add_save'] = 'done';
    }
    else{
        $_SESSION['cat_add_save'] = 'undone';
    }


    $conn = null;
    header("location: category.php");
?>