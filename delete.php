<?php
    session_start();
    if(isset($_SESSION['role']) && $_SESSION['role'] == 'a'){
        $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
        $sql = "DELETE FROM post where id = $_GET[id]";
        $conn->exec($sql);
        $sql1 = "DELETE FROM comment where post_id = $_GET[id]";
        $conn->exec($sql1);
        $conn=null;
        header("location:index.php");
    }else{
        header("location:index.php");
        die();
    }
    
?>