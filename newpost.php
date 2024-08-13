<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard Suisei</h1><hr><br>
    <?php
        echo "ผู้ใช้ : $_SESSION[username]<br>";
        echo "<table><tr><td><form>หมวดหมู่ :</td>
        <td><select name='story'>
            <option value='All'>--ทั้งหมด--</option>
            <option value='normal'>ข่าวสารทั่วไป</option>
            <option value='music'>เพลง</option>
            <option value='concert'>คอนเสิร์ต</option>
            <option value='stream'>สตรีม</option>
        </select></td></tr><br>
        <tr><td>หัวข้อ : </td>
        <td><input type='text'></td></tr>
        <tr><td>เนื้อหา : </td>
        <td><textarea rows='5' cols='50'></textarea></td></tr>
        <tr><td colspan='2'><input type='submit' value='บันทึกข้อความ'></td></tr>
        </table>
        <div style='text-align: center';><a href='index.php' >กลับไปหน้าหลัก</a></div>";
    ?>
</body>
</html>