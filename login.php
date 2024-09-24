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
    <title>Login Webboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include "nav.php";
    ?>
    <br>
    <?php
        if(isset($_SESSION['Error'])){
            if($_SESSION['Error'] == 1){
                echo "<div class='alert alert-danger m-auto mt-3' role='alert' style='max-width: 25rem;'>
                        ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง
                    </div>" ;
                $_SESSION['Error'] = 0;
            }
        }
    ?>
    

        <div class="card text-bg-light m-auto mt-3" style="max-width: 25rem;">
            <div class="card-header">
                เข้าสู่ระบบ
            </div>
            <div class="card-body">
                <form action="verify.php" method="post">
                    <label for="Login" class="form-label" name=>Login:</label>
                    <input type="text" name="Login" class="form-control">
                    <label for="Password" class="form-label">Password:</label>
                    <input type="password" name="Password" class="form-control">
                    <div class="mt-3" style="text-align: center;">
                        <input type="submit" value="Login" class="btn btn-success btn-sm">
                        <input type="reset" class="btn btn-secondary btn-sm ms-2">
                    </div>
                </form>
            </div>
        </div>
        <!-- <table style="border: 2px solid black; width: 40%;" align="center">
            <tr><th style="background-color: #6CD2FE; text-align:left" colspan="2">เข้าสู่ระบบ</th></tr><br>
            <form action="verify.php" method="post">
                <tr><td>Login</td>
                    <td><input type="text" name="Login"></td></tr><br>
                    <tr><td>Password</td>
                    <td><input type="password" name="Password"></td></tr><br>
                    <tr><td colspan="2" align="center"><input type="submit" value="Login"></td></tr>
            </form>
        </table>-->
        <br>
        <div style="text-align:center;">ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></div>
    </div>
</body>
</html>