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
    <?php
    include "nav.php";
    ?>
    <div class=" row">
        <div class=" col-lg-3"></div>
        <div class=" col-lg-6">
            <?php
                if(isset($_SESSION['add_login'])){
                    if($_SESSION['add_login']=='error'){
                        echo "<div class=' alert alert-danger mt-4'>
                            ชื่อบัญชีซ้ำหรือฐานข้อมูลมีปัญหา</div>";
                    }else{
                        echo "<div class=' alert alert-success mt-4'>เพิ่มบัญชีเรียบร้อย</div>";
                    }
                    unset($_SESSION['add_login']);
                }
            ?>
        </div>
    </div>

    <div class="card border-primary m-auto mt-3" style="max-width: 45rem;">
            <div class="card-header bg-primary text-white">เข้าสู่ระบบ</div>
            <div class="card-body">
                <form action="register_save.php" method="post">
                    <div class="mb-3 row">
                        <label for="login" class="col-sm-2 col-form-label">ชื่อบัญชี :</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="login" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pwd" class="col-sm-2 col-form-label">รหัสผ่าน :</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" name="pwd" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">ชื่อ-นามสกุล :</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="gender" class="col-sm-2 col-form-label">เพศ :</label>
                        <div class="col-sm-10">
                            <div class="from-check">
                                <input class="form-check-input" type="radio" name="gender" value="m" required>
                                <label class="form-check-label" for="m">
                                    ชาย
                                </label>
                            </div>
                            <div class="from-check">
                                <input class="form-check-input" type="radio" name="gender" value="f" required>
                                <label class="form-check-label" for="f">
                                    หญิง
                                </label>
                            </div>
                            <div class="from-check">
                                <input class="form-check-input" type="radio" name="gender" value="o" required>
                                <label class="form-check-label" for="o">
                                    อื่นๆ
                                    </label>
                            </div>
                        </div>
                    </div>    
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">อีเมล :</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <!-- <a class="btn btn-primary btn-sm" href="#" role="button"><i class="bi bi-save"></i> สมัครสมาชิก</a> -->
                            <button type="submit" class="btn btn-primary btn-sm" required><i class="bi bi-save"></i> สมัครสมาชิก</button>
                        </div>
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
    <!-- <div style="text-align: center;"><a href="index.php" >กลับไปหน้าหลัก</a></div> -->
</body>
</html>