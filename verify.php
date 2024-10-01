<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
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
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];

    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    $sql = "SELECT * FROM user where login='$login' and password='$pwd'";
    $result = $conn->query($sql);
    if($result->rowCount()==1){
        $data=$result->fetch(PDO::FETCH_ASSOC);
        $_SESSION['username']=$data['login'];
        $_SESSION['role']=$data['role'];
        $_SESSION['user_id']=$data['id'];
        $_SESSION['id']=$_SESSION_id();
        header("location:index.php");
        die();
    }else{
        $_SESSION['Error']="error";
        header("location:login.php");
        die();
    }
    // echo"Webboard Suisei"."<HR>";
    // echo"เข้าสู่ระบบด้วย"."<BR>";
    // echo"Login = $L"."<BR>";
    // echo"Password = $P"."<BR>";
    $conn = null;
    ?>
        <!-- <?php
        if($L == "admin" && $P == "ad1234"){
            $_SESSION['username'] = "admin";
            $_SESSION['role'] = 'a';
            $_SESSION['id'] = session_id();
            header("location:index.php");
        }
        elseif($L == $result['login'] && $P == $result['password']){
            $_SESSION['username'] = 'member';
            $_SESSION['role'] = 'm';
            $_SESSION['id'] = session_id();
            header("location:index.php");
        }
        else{
            $_SESSION['Error'] = 1;
            header("location:login.php");
        }
        ?> -->
</body>
</html>