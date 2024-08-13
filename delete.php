<?php
    session_start();
    if(isset($_SESSION['id']) && $_SESSION['role'] == "a"){
        echo "ลบกระทู้ หมายเลข&nbsp$_GET[id]";
        echo "<br><a href='index.php'>กลับไปหน้าหลัก</a>";
    }else{
        header("location:index.php");
}
?>