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
        </select> <a href="login.html" style="float: right;">เข้าสู่ระบบ</a>
    </form><br>
    <ul>
        <?php
            for($i=1;$i<=10;$i++){
                echo "<li>"."<a href='post.php?id=$i'>"."กระทู้ที่".$i."<BR>"."</li>";
            }
        ?>
    </ul>
</body>
</html>