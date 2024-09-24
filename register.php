<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Member</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h1 style="text-align: center;">สมัครสมาชิก</h1><br>
    <div class="card text-bg-light m-auto mt-3" style="max-width: 35rem;">
            <div class="card-header" style="background-color: #6CD2FE;">
                กรอกสมาชิก
            </div>
            <div class="card-body">
                <form action="login.php" method="post">
                    <label for="Login" class="form-label" name=>Account:</label>
                    <input type="text" name="Login" class="form-control">
                    <label for="Password" class="form-label">Password:</label>
                    <input type="password" name="Password" class="form-control">
                    <label for="Name" class="form-label">Name:</label>
                    <input type="text" name="Name" class="form-control">
                    <div class="mt-1">
                        <input type="radio" name="gender" value="m" class="form-check-input">ชาย <br>
                        <input type="radio" name="gender" value="f" class="form-check-input">หญิง <br>
                        <input type="radio" name="gender" value="n" class="form-check-input">อื่นๆ
                    </div>
                    <div class="mt-3" style="text-align: center;">
                        <input type="submit" value="Register" class="btn btn-success btn-sm">
                    </div>
                </form>
            </div>
        </div>
    <!-- <table style="border: 2px solid black; width: 60%;" align="center"><form action="login.php">
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
    </form></table><br> -->
    <div style="text-align: center;"><a href="index.php" >กลับไปหน้าหลัก</a></div>
</body>
</html>