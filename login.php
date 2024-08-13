<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Webboard</title>
    <style>
        .center{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="center">Webboard Suisei</h1><hr>
    <table style="border: 2px solid black; width: 40%;" align="center">
        <tr><th style="background-color: #6CD2FE; text-align:left" colspan="2">เข้าสู่ระบบ</th></tr><br>
        <form action="verify.php" method="post">
            <tr><td>Login</td>
                <td><input type="text" name="Login"></td></tr><br>
                <tr><td>Password</td>
                <td><input type="password" name="Password"></td></tr><br>
                <tr><td colspan="2" align="center"><input type="submit" value="Login"></td></tr>
        </form>
    </table><br>
    <h3 class="center">ถ้ายังไม่ได้เป็นสมาชิก <a href="register.html">กรุณาสมัครสมาชิก</a></h3>
</body>
</html>