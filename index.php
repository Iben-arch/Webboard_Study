<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard Suisei</title>
    <style>
        .center{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="center">Webboard Suisei</h1><hr><br>
    <form><b>หมวดหมู่ : </b>
        <select name="story">
            <option value="All">--ทั้งหมด--</option>
            <option value="normal">ข่าวสารทั่วไป</option>
            <option value="music">เพลง</option>
            <option value="concert">คอนเสิร์ต</option>
            <option value="stream">สตรีม</option>
        </select> 
        <?php
            if(!isset($_SESSION['id'])){
                echo "<a href='login.php' style='float: right;'>เข้าสู่ระบบ</a>";
            }else{
                echo "<span style='float: right;'>ผู้ใช้งานระบบ : $_SESSION[username]&nbsp;
                <a href='logout.php'>ออกจากระบบ</a>
                </span>";
                echo "<br><a href='newpost.php'>สร้างกระทู้ใหม่</a>";
            }
        ?>
    </form><br>
    <ul>
        <?php
        if(!isset($_SESSION['id'])){
            for($i=1;$i<=10;$i++){
                echo "<li><a href='post.php?id=$i'>กระทู้ที่ $i</a><BR></li>";
            }
        }elseif($_SESSION['role'] == "a"){
            for($i=1;$i<=10;$i++){
                echo "<li><a href='post.php?id=$i'>กระทู้ที่ $i</a>&nbsp&nbsp<a href='delete.php?id=$i'>ลบ</a><BR></li>";
            }
        }else{
            for($i=1;$i<=10;$i++){
                echo "<li><a href='post.php?id=$i'>กระทู้ที่ $i</a><BR></li>";
            }
        }
        ?>
    </ul>
</body>
</html>