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
    <title>Verify</title>
</head>
<body>
    <?php
    $L = $_POST['Login'];
    $P = $_POST['Password'];
    // echo"Webboard Suisei"."<HR>";
    // echo"เข้าสู่ระบบด้วย"."<BR>";
    // echo"Login = $L"."<BR>";
    // echo"Password = $P"."<BR>";
    ?>
    <div>
        <?php
        if($L == "admin" && $P == "ad1234"){
            $_SESSION['username'] = "admin";
            $_SESSION['role'] = 'a';
            $_SESSION['id'] = session_id();
            header("location:index.php");
        }
        elseif($L == "member" && $P == "mem1234"){
            $_SESSION['username'] = 'member';
            $_SESSION['role'] = 'm';
            $_SESSION['id'] = session_id();
            header("location:index.php");
        }
        else{
            $_SESSION['Error'] = 1;
            header("location:login.php");
        }
        ?>
</body>
</html>