<?php
    session_start();
    if(!$_SESSION['role'] == "a"){
        header("location:index.php");
    }
?>
<?php
    echo "ลบกระทู้ หมายเลข&nbsp$_GET[id]";
    echo "<br><a href='index.php'>กลับไปหน้าหลัก</a>";
?>