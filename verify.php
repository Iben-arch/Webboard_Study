<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body style="text-align: center;">
    <?php
    $L = $_POST['Login'];
    $P = $_POST['Password'];
    // echo"Webboard Suisei"."<HR>";
    // echo"เข้าสู่ระบบด้วย"."<BR>";
    // echo"Login = $L"."<BR>";
    // echo"Password = $P"."<BR>";
    ?>
    <h1>Webboard Suisei</h1><hr>
    <div>
        <?php
        if($L == "admin" && $P == "ad1234"){
            $_SESSION['username'] = "admin";
            $_SESSION['role'] = 'a';
            $_SESSION['id'] = session_id();
            echo "ยินดีต้อนรับคุณ ADMIN";
        }
        elseif($L == "member" && $P == "mem1234"){
            $_SESSION['username'] = 'member';
            $_SESSION['role'] = 'm';
            $_SESSION['id'] = session_id();
            echo "ยินดีต้อนรับคุณ MEMBER";
        }
        else
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
        ?>
    </div><br>
    <div style="text-align: center;"><a href="index.php" >กลับไปหน้าหลัก</a></div>
</body>
</html>