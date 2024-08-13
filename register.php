<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Member</title>
</head>
<body>
    <h1 style="text-align: center;">สมัครสมาชิก</h1><hr>
    <table style="border: 2px solid black; width: 60%;" align="center"><form action="Login">
        <tr><th style="background-color: #6CD2FE; text-align:left" colspan="2">กรอกสมาชิก</th></tr><br>
        <tr><td>ชื่อบัญชี:</td>
        <td><input type="text" name="Login"></td></tr><br>
        <tr><td>รหัสผ่าน:</td>
        <td><input type="password" name="Password"></td></tr><br>
        <tr><td>ชื่อ-นามสกุล:</td>
        <td><input type="text" name="Name"></td></tr><br>
        <tr><td>เพศ:</td>
        <td><input type="radio" name="gender" value="m">ชาย <br>
        <input type="radio" name="gender" value="f">หญิง <br>
        <input type="radio" name="gender" value="n">อื่นๆ</td></tr>
        <tr><td>อีเมล:</td>
        <td><input type="text" name="email"></td></tr><br>
        <tr><td colspan="2" align="center"><input type="submit" value="สมัครสมาชิก"></td></tr>
    </form></table><br>
    <div style="text-align: center;"><a href="index.php" >กลับไปหน้าหลัก</a></div>
</body>
</html>